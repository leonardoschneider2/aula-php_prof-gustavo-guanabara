# AULA PHP - Tipos Primitivos - Curso em Vídeo com Professor Gustavo Guanabara

### Nessa Aula vou salientar apenas aquelas funções que ele apresentar e que eu não tiver o conhecimento:

````php
/* Esse código vai apenas retornar um texto simples */
<?php
	$number = 10;
	echo "Hello World! number: $number";
?>
````

### Uso da função var_dump() para obter valor e tipo de uma variável.

````php
/* Fazendo uso da função var_dump para obter
valor e tipo primitivo de uma variável */
<?php
  $variavel1 = 10;
  var_dump($variavel1);

  $variavel2 = 5e2; // 5 * (10 * 2)
  var_dump($variavel2);

  $variavel3 = 0b1010; // binário 0b0101=== 10
  var_dump($variavel3);

  $variavel4 = 0x1F; // hexadecimal 1F === 15
  var_dump($variavel4);

  $variavel5 = 010; // octal 10 === 8
  echovar_dump($variavel5);

  $variavel6 = (integer) 3e2; // forçando que o valor seja inteiro, seria float

?>
````

### Fazendo print com variáveis booleanas

````php
/* Uso de variável booleana com echo
false - (null) | true - 1 */
<?php
  $variavelBooleana1 = false;
  $variavelBooleana2 = true;

  echo "variavel booleana 1: $variavelBooleana1\n";
  echo "variavel booleana 2: $variavelBooleana2";
?>
````

### Tipos Primitivos Especiais

````php
/* Tipos primitivos especiais
  resource - 
  callabe -
  mixed -
*/
<?php

?>
````

### Tipos Primitivos Compostos

````php
/* Tipos primitivos compostos
  Object - 
  Array - 
*/
<?php
  // Arrays
  $arrayDeNomes = ["Leonardo", "Lucas", "Schneider", "Coelho"];
  var_dump($arrayDeNomes);

  $arrayDeTudo = ["Leonardo", (integer) '22', (float) 200000, "Beatriz Darlet Freitas Souza"];
  var_dump($arrayDeTudo);

  // Objects
  class Pessoa {
    private string $nome;
  }
  $p = new Pessoa;
  var_dump($p); // object(Pessoa #1) (0) { ["nome"]:"Pessoa":private => uninitialized(string) }

?>
````