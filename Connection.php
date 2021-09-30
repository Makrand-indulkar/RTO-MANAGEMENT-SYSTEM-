<?php

    class Connection
    {
        function getNewConnection()
        {
            $db = new mysqli("localhost:3307", "root", "", "rto");
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            } 
            return $db;
        }
    }

?>