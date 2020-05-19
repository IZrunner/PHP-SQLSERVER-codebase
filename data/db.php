<?php
    class PhonesRepairServiceDB {
        private $errText = "";
        private $conn;

        function getErrText() {
            return $this->errText;
        }

        function connect() {
            $this->errText = "";
            try {
                $srvName = "sql-server,1433";
                $connOptions = [
                    "Database"=>"Phones_Repair_Service",
                    "UID"=>"izuser",
                    "PWD"=>"izpassword",
                    "CharacterSet"=>"UTF-8"
            ];
            $this->conn = sqlsrv_connect($srvName, $connOptions);
            if($this->conn = false) {
                $this->errText = var_dump(sqlsrv_errors());
                return false;
            }
            return true;
            }
            catch(Exception $e) {
                $this->errText = "Unknown error occured!";
                return false;
            }
        }

        function disconnect() {
            sqlsrv_close($this->conn);
        }

        function makeQuery($sqlText, $flg_disconnect = true) {
            $this->errText = "";
            $result = [];
            try {
                if($this->conn || $this->connect()) {
                    $sql_stmt = sqlsrv_query($this->conn, $sqlText);
                    if(!$sql_stmt) {
                        $this->errText = var_dump(sqlsrv_errors());
                        return false;
                    }
                    while($row = sqlsrv_fetch_array($sql_stmt, SQLSRV_FETCH_ASSOC)) {
                        $result[] = $row;
                    }
                    sqlsrv_free_stmt($sql_stmt);
                    return $result;
                }               
            }
            catch(Exception $e) {
                $this->errText = "Unknown error occured!";
                return false;
            }
        }
        
    }
?>