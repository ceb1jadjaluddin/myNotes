<?php

ReadData();

function OpenConnection()
    {
                
        $serverName = "66.42.107.79"; //serverName\instanceName
        $connectionInfo = array( "Database"=>"mdbuddydbNai", "UID"=>"api_ns", "PWD"=>"NS@[3cFsCu,!hk#D");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        if( $conn ) {
            echo "Connection established.<br />";
        }else{
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
        return $conn;
    }

    function ReadData()
    {
        try
        {
            $conn = OpenConnection();
            $tsql = "SELECT site_name FROM nssitelocationData";
            $getProducts = sqlsrv_query($conn, $tsql);
            if ($getProducts == FALSE)
                echo"no products found";
            $productCount = 0;
            while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
            {
                echo($row['site_name']);
                echo("<br/>");
                $productCount++;
            }
            sqlsrv_free_stmt($getProducts);
            sqlsrv_close($conn);
        }
        catch(Exception $e)
        {
            echo("Error!");
        }
    }

?>