<?php


    abstract class Funcionario {
        protected $nome;
        protected $salario;
        protected $email;
        protected $idade;

        public function nome(){
            echo "Seu nome";
        }

        public function salario(){
            echo "Seu salario";
        }
        
        public function idade(){
            echo "Sua idade";
        }

        public function email(){
            echo "Seu email";
        }
    } 

    $Funcionario = new Funcionario;
    $Funcionario->nome = "";
    $Funcionario->salario = "";
    $Funcionario->email = "";
    $Funcionario->idade = "";

     class FuncionarioComum {
        public $nome;
        public $salario;
        public $email;
        public $idade;

        public function nome(){
            echo "Seu nome: Otavio";
        }

        public function salario(){
            echo "Seu salario: 2500";
        }

        public function email(){
            echo "Seu email: otavio@gmail.com";
        }
        function calcularBonus($salario, $bonusFuncionarioComum) {
            return $salario + $bonusFuncionarioComum;
         } echo somar (2500, 125); 

            public function idade(){
            echo "Sua idade";
        }

         public function funcao(){
            echo "Sua Função: Organizador";
        }
    }

    $FuncionarioComum->nome = "Otavio";
    $FuncionarioComum->salario = 2500;
    $FuncionarioComum->email = "otavio@gmail.com";
    $bonusFuncionarioComum->acrescimo = 125;
    $FuncionarioComum->funcao = "Organizador";
    $FuncionarioComum->idade = "26";

     class Gerente {
        public $nome;
        public $salario;
        public $email;
        public $idade;
        public $funcao;

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

            public function idade(){
            echo "Sua idade";
        }

         public function funcao(){
            echo "Sua Função: Comandar os funcionários";
        }
    }
    $Gerente->nome = "Nicolas";
    $Gerente->salario = 7000;
    $Gerente->email = "nicolas@gmail.com";
    $bonusGerente->acrescimo = 350;
    $Gerente->idade = "41";
    $Gerente->funcao = "Comandar os funcionarios"