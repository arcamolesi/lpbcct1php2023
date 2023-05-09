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
            
            echo "nome: ".  $operador->getNome() . "</br>";
            echo "aniversario: ". $operador->getAniversario(). "</br>";
            echo "salario: " . $operador->getSalario() . "</br>";
        }
    }




?>