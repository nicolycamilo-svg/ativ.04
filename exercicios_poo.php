<?php
// ==========================================
// EXERCÍCIOS: RESPOSTAS
// ==========================================
/*
1. Diferença public vs private:
   - Public: ele é Acessível de qualquer lugar do código.
   - Private: é Acessível apenas dentro da própria classe.

2. Acessar atributo private fora da classe:
   - Gera um erro fatal de execução, impedindo o programa de rodar.

3. Função do Construtor:
   - Iniciar o objeto automaticamente ao ser instanciado (new), definindo seus valores iniciais.
*/

// ==========================================
// EXERCÍCIOS 
// ==========================================
class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() { return $this->nome; }
    public function getPreco() { return $this->preco; }
}

// Criando 2 objetos Produto
$p1 = new Produto("Camiseta", 49.90);
$p2 = new Produto("Tênis", 299.90);

echo "Produto 1: " . $p1->getNome() . " - R$ " . $p1->getPreco() . "\n";
echo "Produto 2: " . $p2->getNome() . " - R$ " . $p2->getPreco() . "\n";

// ==========================================
// DESAFIO 
// ==========================================
/*
Onde deve ficar a validação do CPF?
- Resposta: No SETTER (ou método da classe). 

- Motivo: Garante o encapsulamento e a segurança da regra de negócio,
  impedindo que qualquer parte do sistema salve um CPF inválido no objeto.
*/
?>