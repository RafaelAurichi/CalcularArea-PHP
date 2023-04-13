<?php
    function CalcularArea(){
        $forma = $_POST["forma"];
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $base = $_POST["base1"];
        $altura = $_POST["altura2"];
        $raio = $_POST["raio"];
        $total = 0;

        function Retangulo($valor1, $valor2){
            $total = $valor1 * $valor2;
        }

        function Triangulo($valor1, $valor2){
            $total = ($valor1 * $valor2) / 2;
        }

        function Circulo($valor){
            $total = pi() * ($valor ** 2);
        }

        if (forma == "retangulo"){
            Retangulo();
            echo "A área do retângulo é: {$total}";
        }elseif (forma == "triangulo"){
            Triangulo();
            echo "A área do triângulo é: {$total}";
        }elseif (forma == "circulo"){
            Circulo();
            echo "A área do círculo é: {$total}";
        }else{
            "Seleciona uma forma geométrica!";
        }
    }
?>