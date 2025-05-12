<?php
 
class Curso {
    public $titulo;
    private $aluno;
    public $horas;
    public $dias;
    
 
    // Construtor com validação
    public function __construct($titulo, $aluno, $horas, $dias) {
        if (empty($titulo)) {
            throw new Exception("O campo Titulo é obrigatório.");
        }
        if (empty($aluno)) {
            throw new Exception("O campo Aluno é Obrigatório");
        }
        if (empty($horas)) {
            throw new Exception("O campo Horas é obrigatório.");
        }
        if (empty($dias)) {
            throw new Exception("O campo Dias é obrigatório.");
        }


        $this->titulo = $titulo;
        $this->aluno = $aluno;
        $this->horas = $horas;
        $this->dias = $dias;
    }

    public function getAluno() {
        return $this->aluno;
    }
 
    
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Titulo: <strong>$this->titulo</strong><br>";
        echo "Aluno: <strong>" . $this->getAluno() ."</strong><br>";
        echo "Horas: <strong>$this->horas</strong></p>";
        echo "<p>dias: <strong>$this->dias</strong></p>";
    }
}