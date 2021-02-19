<?php
class Alumno {
  private $nombres;
  private $apellidos;
  private $dni;
  private $codigo;
  private $carrera;

  function __construct($nombres, $apellidos, $dni, $codigo, $carrera) {
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
    $this->dni = $dni;
    $this->codigo = $codigo;
    $this->carrera = $carrera;
  }

  public function getNombres() {
    return $this->nombres;
  }
  public function setNombres($nombres) {
    $this->nombres = $nombres;
  }

  public function getApellidos() {
    return $this->apellidos;
  }
  public function setApellidos($apellidos) {
    $this->apellidos = $apellidos;
  }

  public function getDNI() {
    return $this->dni;
  }
  public function setDNI($dni) {
    $this->dni = $dni;
  }
  
  public function getCodigo() {
    return $this->codigo;
  }
  public function setCodigo($codigo) {
    $this->codigo = $codigo;
  }

  public function getCarrera() {
    return $this->carrera;
  }
  public function setCarrera($carrera) {
    $this->carrera = $carrera;
  }
}
?>