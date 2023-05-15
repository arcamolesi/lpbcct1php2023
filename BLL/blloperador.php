<?php
    namespace BLL; 
    use DAL\dalOperador; 
    include_once '../../DAL/dalOperador.php';
    
    class bllOperador {
        public function Select (){
            $dal = new \Dal\dalOperador(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }


        public function Insert (\MODEL\Operador $operador){
           
            //echo "Nome: {$operador->getNome()} </br>"; 
            //echo "Aniversario: {$operador->getAniversario()} </br>"; 
           // echo "Salario: {$operador->getSalario()} </br>"; 

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalOperador(); 

           $dal->Insert($operador);
          
        }

        public function Update (\MODEL\Operador $operador){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalOperador(); 

           $dal->Update($operador);
          
        }
    }




?>