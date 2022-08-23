<?php 
    class Database {
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $db = "pbo_pegawai";
        var $connection;
        var $conn;
        var $query;
        var $data;
        var $result;

        function Connect() {
            $this->connection=mysqli_connect($this->host, $this->username, $this->password, $this->db);
            return $this->connection;
        }

        function getDataPegawai($query) {
            $this->db = new Database();
            $this->conn = $this->db->Connect();

            $this->query=mysqli_query($this->conn, $query);
            while($this->data=mysqli_fetch_array($this->query)) {
                $this->result[] = $this->data;
            }
            return $this->result;
        }
    }
?>