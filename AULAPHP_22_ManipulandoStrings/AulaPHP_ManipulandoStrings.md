# AULA PHP - Manipulação de Strings - Curso em Vídeo com Professor Gustavo Guanabara

### Nessa Aula vou salientar apenas aquelas funções que ele apresentar e que eu não tiver o conhecimento:

No PHP existem quatro tipos de strings:
 - double quoted = "string"
 - single quoted = 'string'
 - Heredoc =
 - Nowdoc =

````php
/* Concatenando strings. O simbolo 
de + (operador de adição / mais) não 
funciona para concatenar strings. No caso da
linguagem PHP usamos o sinal de . (ponto final) */
<?php
  // código unicode no site www.emojipedia.org
  $doubleQuoted = "Hello \u{1f418}"; // interpreta o texto
  $singleQuoted = 'World \u{1f418}'; // não interpreta o texto

  const ESTADO = 'Minas Gerais';
  $doubleQuoted2 = "Moro em ESTADO"; // retorna - Moro no ESTADO
  $singleQuoted2 = 'Moro em ESTADO'; //retorna - Moro no ESTADO
  $concatenator = 'Moro em ' . ESTADO; // retorna - Moro no Minas Gerais
  echo $doubleQuoted . $singleQuoted;
?>
````