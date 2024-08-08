<?php
        $servername = "localhost";
        $database = "tdndoanhnet_nam"; 
        $usernamedb = "tdndoanhnet_nam";
        $password = "tdndoanhnet_nam";
        $sql = "mysql:host=$servername;dbname=$database;";
        $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        // Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
        try { 
          $pdo = new PDO($sql, $usernamedb, $password, $dsn_Options);
          $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        } catch (PDOException $error) {
          echo 'Connection error: ' . $error->getMessage();
        }
?>