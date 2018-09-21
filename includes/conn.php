<?php 

function connection() {

		 $username = 'root';
	     $password = '';
	     $host 	   = 'localhost';
	     $database = 'gm';

        $link = new mysqli($host, $username, $password, $database);
        if (!$link) {
            return die('Connection Failed');
        } else {
            return $link;
        }
    }


    ?>