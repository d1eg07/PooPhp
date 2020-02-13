<?php 

class Conta //Criando Classe Conta
{
    public $cpfTitular; //Definindo atributos da classe conta
    public $nomeTitular;
    public $saldo;


    public function sacar(float $valorSacar) //Método da classe conta
    {
            if($valorSacar >$this-> $saldo) //Usando referencia ao objeto que "chamou" o método
            {
                echo "Saldo indisponível";
            }    

            else
            {
                $this->$saldo =- $valorSacar;
            }
    }

}

