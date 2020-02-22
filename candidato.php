<?
// Criando a classe Aluno
class Aluno {
  public $nome;
  private $idade;
  public $periodo;
  
  /* 
     Há duas formas de criar um método construtor,
     Escolha um dos métodos!
  */
  
  // Método 1: usando a palavra __contruct
  public function __construct($name, $age, $per) {
    $this->setNome($name);
    $this->setIdade($age);
    $this->setPeriodo($per);
  }
  
  // Método 2: usando o proprio nome da classe
  public function Aluno($name, $age, $per) {
    $this->setNome($name);
    $this->setIdade($age);
    $this->setPeriodo($per);
  }
}


// Chamando a classe usando construtor

$diego = new Aluno("Diego", 19, 1);
