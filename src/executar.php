<?php
class Carro {
    public $cor;
    public $modelo;
    public $velocidade = 0;

    function acelerar($quanto) {
        $this->velocidade += $quanto;
}
    function frear() {
    $this->velocidade = 0;
}
    // (-> operador de acesso) Acessar propriedades ou metodos de um objeto(caracteristicas do objeto), operação de acesso, (. = contatenação de string)
    function status() {
        echo $this->modelo . "  " . $this->cor . " Está a " . $this->velocidade . " km/h \n";
    }
}

//Acessar propriedades ou metodos de um objeto(caracteristicas do objeto), operação de acesso
$meu_carro = new Carro();
$meu_carro->cor = "Azul";
$meu_carro->modelo = "Fiat";
$meu_carro->acelerar(10);
$meu_carro->status();

//separar
$carro_vizinho = new Carro();
$carro_vizinho->cor = "Vermelho";
$carro_vizinho->modelo = "Toyota";
$carro_vizinho->acelerar(20);
$carro_vizinho->status();