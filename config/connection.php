<?php
class Connection {
    public function openConnection() {
        $hostname = "sql210.infinityfree.com";
        $username = "if0_37648917";
        $password = "jsiOqMGQf2";
        $database = "if0_37648917_kenangandia";

        $conn = new mysqli($hostname, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        return $conn;
    }
}
?>
