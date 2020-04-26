CREATE TABLE Person (
    PersonID int,
    FirstName varchar(255)
);
---------------

<?php
    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.226.1)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))" ;

    if($c = OCILogon("system", "1311", $db))
    {
        echo "Successfully connected to Oracle.\n";
        OCILogoff($c);
    }
    else
    {
        $err = OCIError();
        echo "Connection failed." . $err[text];
    }
?>