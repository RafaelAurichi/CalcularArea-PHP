<?php
    function CalcularArea(){
        $forma = $_POST["forma"];
        $lado1 = (double) $_POST["lado1"];
        $lado2 = (double) $_POST["lado2"];
        $base = (double) $_POST["base"];
        $altura = (double) $_POST["altura"];
        $raio = (double) $_POST["raio"];

        function Retangulo($valor1, $valor2){
            $total = $valor1 * $valor2;
            echo "A área do retângulo é: {$total}";
        }

        function Triangulo($valor1, $valor2){
            $total = ($valor1 * $valor2) / 2;
            echo "A área do triângulo é: {$total}";
        }

        function Circulo($valor){
            $total = pi() * ($valor ** 2);
            echo "A área do círculo é: {$total}";
        }

        if ($forma == "retangulo"){
            Retangulo($lado1, $lado2);
        }elseif ($forma == "triangulo"){
            Triangulo($base, $altura);
        }elseif ($forma == "circulo"){
            Circulo($raio);
        }else{
            "Seleciona uma forma geométrica!";
        }
    }
?>