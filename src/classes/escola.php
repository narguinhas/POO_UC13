<?php
 
class Escola {
    public $nome;
    public $endereço;
    public $cidade;
    private $cnpj;
    
 
    // Construtor com validação
    public function __construct($nome, $endereço, $cidade, $cnpj) {
        if (empty($nome)) {
            throw new Exception("O campo Nome é obrigatório.");
        }
        if (!filter_var($endereço)) {
            throw new Exception("O campo Endereço é obrigatório.");
        }
        if (empty($cidade)) {
            throw new Exception("O campo Cidade é obrigatório.");
        }

        if (empty($cnpj)) {
            throw new Exception("O campo CNPJ é obrigatório.");
        }


        $this->nome = $nome;
        $this->endereço = $endereço;
        $this->cidade = $cidade;
        $this->cnpj = $cnpj;
    }
 
    // Getter do CNPJ (encapsulamento)
    public function getCnpj() {
        return $this->cnpj;
    }
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Nome: <strong>$this->nome</strong><br>";
        echo "Endereço: <strong>$this->endereço</strong><br>";
        echo "Cidade: <strong>$this->cidade</strong></p>";
        echo "CNPJ: <strong>" . $this->getcnpj() . "</strong></p>";
    }
}