<?php

    
   class vehiculo {
   //Atributos 
    public $placa;
    public $marca;
    public $modelo;
    public $kilometraje;
    public $velocidad;
    public $tiempo;
   //public fecha_registro = date (Y-m-d);

    //construcor 
    public function __construct($vrplaca, $vrmarca, $vrmodelo, $vrkilometraje,$vrvelocidad,$vrtiempo){
        $this->placa= $vrplaca;
        $this->marca = $vrmarca;
        $this->modelo = $vrmodelo;
        $this->kilometraje = $vrkilometraje;
        $this->fecha_registro = date('Y-m-d');
        $this->velocidad= $vrvelocidad;
        $this->tiempo = $vrtiempo;

    }

    public function getvehiculo(){
         $arrayvehiculo = Array (
            'placa: ' => $this-> placa,
            'marca: ' => $this-> marca,
            'fecha registro:'  => $this->fecha_registro, 
            'kilometrage: ' => $this-> kilometraje,
        );
        return $arrayvehiculo;


    }
   
    public function calculo_distancia(){
      $vr_distancia = $this->velocidad*$this->tiempo;
      return $vr_distancia;

    }

}
?>
















}






































