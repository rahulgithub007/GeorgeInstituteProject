<?php

$databaseHost = 'localhost';
$databaseName = 'u183545419_prdb';
$databaseUsername = 'u183545419_dodo';
$databasePassword = 'rahul1311';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$query = "SELECT id, firstname, lastname,fsname,gender,villagename,mobile from pr  order by id ";

if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

$users = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('ID', 'First Name', 'Last Name', 'Father/Spouse Name','Gender','Village Name','Mobile'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>