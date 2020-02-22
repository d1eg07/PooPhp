<?php 
header('Content-type: text/plain; charset=utf-8');

class Aluno {  //Criando nova classe

    //Definindo Atributos
    public $nome; //Qual quer um pode acessar
    private $cpf; //Somente a classe e os métodos podem acessar
    protected $mediaAnual; //Somente a classe e sua classe "filha"


    public function getNome() //Retornando o nome que foi definido
    {
        return $this->nome;
    }

    public function setNome($name) //Setando o novo nome que foi passado como parâmetro
    {
        $this->nome = $name;
    }

    public function getCpf() //Retornando o CPF que foi definido
    {
        return $this->cpf = $cpf;
    }

    public function setCpf($cpf) //Setando o novo cpf que foi passado como parâmetro
    {
        $this->cpf = $cpf;
    }

    public function getMediaAnual() //Retornando a média atual que foi definida
    {
        return $this->mediaAnual;
    }

    public function setMediaAnual($media) //Setando a nova média anual que foi passado como parâmetro
    {
        $this->mediaAnual = $media;
    }

}


$diego = new aluno;
$diego->setNome("Diego");

echo "O aluno {$diego->getNome()} é muito estudioso";






