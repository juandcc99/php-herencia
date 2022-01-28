<?php
class Hijo extends Padre{//Herencia
    public string $ciudad;
    public string $email;
    function __construct()
    {
    $args = func_get_args();
    $nargs = func_num_args();
    switch($nargs){
        case 1:
        self::__construct1($args[0]);
            break;
        case 2:
        self::__construct2($args[0], $args[1]);
        break;
    }
}
    public function __construct1(string $ciudad){
        $this->ciudad=$ciudad;
    }
    public function __construct2(string $ciudad, string $email){
        $this->ciudad = $ciudad;
        $this->email = $email;
    }
    public function saludar(string $n){
        echo "<i>Hola, soy la clase Hijo con nombre ".$n."</i>";
    }
    public function resta(float $i, float $j):void{
        $i=rand(0,100);
        $j=rand(0,100);
        $total = $i-$j;
        echo "<p>La resta de los numeros es: ".$total."</p>";
        }
}