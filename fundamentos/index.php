<?php

// Fundamentos do PHP

// PHP é uma linguagem interpretada

// Pode chamar: 
//      php <arquivo.php>
// Para interpretar o arquivo e rodar o PHP

// Normalente se usa um NGINX na frente do PHP para rotear as chamadas web

// Mas, mesmo assim, o PHP dispõe de seu próprio serviço de server com php -S localhost:<porta>
// Onde ele vai rodar o index.php da pasta que foi rodado o comando acima

echo 'Hello World!';

// Como declarar funções em PHP
function foo()
{
    echo 'foo';
}

//Como construir classes em PHP
class Teste {

    public string $nome = 'Leo';

    public string $email = 'leo@leo.leo';

    public function __construct()
    {
        echo __METHOD__;
    }

    public function bar()
    {
        echo __CLASS__ . '::' . __FUNCTION__;
    }
}

// Rodando comandos HTML no PHP
echo '<br>';

// Chamando funções locais
foo();

echo '<br>';

// Instanciando classes e chamando suas funções
(new Teste)->bar();

echo '<br>';

// Toda variável se declara com sinal de dóllar na frente $
$teste = new Teste;

// var_dump($variavel) é como se fosse o console.log() do PHP
var_dump($teste);




