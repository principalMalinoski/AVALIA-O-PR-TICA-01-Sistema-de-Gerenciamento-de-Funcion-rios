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
        function calcularBonus(){
            if ($salario = 2500) {
                echo "salário Certo";
            } else { 
               echo "Adicionar 5%";
            }
        }
    }

    $FuncionarioComum->nome = "Otavio";
    $Funcionario->salario = 2500;
    $Funcionario->email = "otavio@gmail.com";


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
        function calcularBonus(){
            if ($salario = 7000) {
                echo "salário Certo";
            } else { 
               echo "Adicionar 15%";
            }
        }
    }
    $FuncionarioComum->nome = "Nicolas";
    $Funcionario->salario = 7000;
    $Funcionario->email = "nicolas@gmail.com";
