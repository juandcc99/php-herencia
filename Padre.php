<?php
abstract class Padre{
    public string $nombre;
    protected int $unidades;
    private float $precio;

    // public function __construct(string $nombre, int $unidades, float $precio){
    //     $this->nombre=$nombre;
    //     $this->unidades=$unidades;
    //     $this->precio=$precio;

    // }

    public function saludar(string $n){
        echo "<i>Hola, soy la clase Padre con nombre ".$n."</i>";
    }
    public function verTareas($tarea):string{
        if ($tarea=="urgente"){
            return $tareaMostrar="Tareas Urgentes";
        } else if ($tarea == "importante") {
            return $tareaMostrar="Tareas Importantes";
        } else {
            return $tareaMostrar= "No hay tareas";
        }
    }
}