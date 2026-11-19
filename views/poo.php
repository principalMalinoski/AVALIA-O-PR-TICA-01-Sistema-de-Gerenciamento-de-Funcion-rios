<?php

    abstract class Funcionario {
        protected $nome;
        protected $salario;
        protected $email;

        public function nome(){
            echo "Seu nome";
        }

        public function salario(){
            echo "Seu salario";
        }

        public function email(){
            echo "Seu email";
        }
    } 

    $Funcionario = new Funcionario;
    $Funcionario->nome = "Gustavo";
    $Funcionario->salario = 2500;
    $Funcionario->email = "gustavo@gmail.com";


     class FuncionarioComum {
        public $nome;
        public $salario;
        public $email;

        public function nome(){
            echo "Seu nome";
        }

        public function salario(){
            echo "Seu salario";
        }

        public function email(){
            echo "Seu email";
        }
        function calcularBonus($salario, $bonusFuncionarioComum) {
            return $salario + $bonusFuncionarioComum;
         } echo somar (2500, 125); 
        
    }

    $FuncionarioComum->nome = "Otavio";
    $FuncionarioComum->salario = 2500;
    $FuncionarioComum->email = "otavio@gmail.com";
    $bonusFuncionarioComum->acrescimo = 125;

     class Gerente {
        public $nome;
        public $salario;
        public $email;

      public function nome(){
            echo "Seu nome";
        }

        public function salario(){
            echo "Seu salario";
        }

        public function email(){
            echo "Seu email";
        }
           function calcularBonus($salario, $bonusGerente) {
            return $salario + $bonusGerente;
         } echo somar (7000, 350); 
    }
    $Gerente->nome = "Nicolas";
    $Gerente->salario = 7000;
    $Gerente->email = "nicolas@gmail.com";
    $bonusGerente->acrescimo = 350;