<?php
$str_conn = "host=localhost port=5432 dbname=Moodle_barato user=postgres password=salesianos";
$connection = pg_connect($str_conn) or die("Error de conexión con Moodle_barato");
class Connection {
  private $str_conn = "host=localhost port=5432 dbname=Moodle_barato user=postgres password=salesianos";
  private $connection;
  function conectar() {
    $this->connection = pg_connect($this->str_conn) or die("Error de conexión con Moodle_barato");
  } 
}
?>