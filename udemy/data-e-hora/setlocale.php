<?php

# category : indica quais funções serão afetadas pela definição local.
## Isto é, funções que tratam de informações numéricas, monetárias e/ou strings,
## por exemplo, terão seus comportamentos alterados de acordo com o local definido
## pela função setlocale.
## A constante LC_ALL define que todas estas funções terão seu comportamento alterado.
## Outras constantes restrigem a alteração para certas funções.
## Vide documentação em http://php.net/manual/pt_BR/function.setlocale.php

# locale : indica a localização que deseja definir.
## Existem várias formas de escrever padrões de linguagens que dependem da plataforma do usuário
## Sendo assim, uma boa prática é utilizar todos os valores. Dessa forma, o sistema irá buscar o
## padrão que funcione na plataforma em que estiver rodadando.

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

# Vide tabela de formatação em: http://php.net/manual/pt_BR/function.strftime.php
echo ucwords(strftime("%A, %d de %B de %G"));

?>