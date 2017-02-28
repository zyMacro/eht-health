<?php

function db_connect() {
   $result = new mysqli('localhost:8889', 'root', 'root', 'eht');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
