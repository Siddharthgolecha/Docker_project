<?php
        // Configuration
        $hostname = '172.17.0.2';
        $username = 'siddharth';
        $password = 'siddharth';
        $database = 'scores';
 
        $secretKey = "4273"; // Change this value to match the value stored in the client javascript below 
 
        try {
            $dbh = new PDO('mysql:host='. $hostname .';dbname='. $database, $username, $password);
        } catch(PDOException $e) {
            echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
        }
 
        $realHash = md5($_GET['name'] . $_GET['score'] . $secretKey); 
        if($realHash == $hash) { 
            $sth = $dbh->prepare('INSERT INTO scores VALUES (null, :name, :score)');
            try {
                $sth->execute($_GET);
            } catch(Exception $e) {
                echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
            }
        } 
?>