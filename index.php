<?php
    // phpinfo();
    try {
        $srvName = "sql-server,1433";
        $connOptions = [
            "Database"=>"Phones_Repair_Service",
            "UID"=>"izuser",
            "PWD"=>"izpassword"
        ];
        $conn = sqlsrv_connect($srvName, $connOptions);
        if($conn == false)
            die(var_dump(sqlsrv_errors()));
    } catch (Exception $e) {
        echo("Unknown error occured!");
    }
    echo "Connected!";
    ?>