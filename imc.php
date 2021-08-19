<?php

    class IMC
    {
        private $peso;
        private $altura;
        private $nome;

        public function __construct(Float $peso, Float $altura, String $nome)
        {
            $this->peso = $peso;
            $this->altura = $altura;
            $this->nome = $nome;
        }

        public function calc() : String
        {
            $imc = $this->peso / ($this->altura * $this->altura);
            if ($imc < 20) {
                $faixa = "ABAIXO DO PESO";
            } elseif ($imc >= 20 && $imc <= 25) {
                $faixa = "NORMAL";
            } elseif ($imc > 25 && $imc <= 30) {
                $faixa = "EXCESSO DE PESO";
            } elseif ($imc > 30 && $imc <= 35) {
                $faixa = "OBESIDADE";
            } elseif ($imc > 35) {
                $faixa = "OBESIDADE MÓRBIDA";
            } else {
                return "Erro ao calculcar IMC!";
            }

            return "O(a) paciente {$this->nome} está {$faixa}";
        }
    }

    $imc = new IMC($argv[1], $argv[2], "Saymon Good");
    echo $imc->calc();