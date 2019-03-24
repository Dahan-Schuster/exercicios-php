<b>CÓDIGO:</b> <br/>
<br/>
<pre>
# RETICÊNCIAS: indica a entrada de N valores como parâmetro

# TIPO: indica o tipo dos parâmetros, forçando um cast automático
## caso o parâmetro não seja um inteiro e causando uma exceção
## caso a conversão não seja possível
## (converter "oi" para inteiro, por exemplo)

# RETORNO; indica o tipo do valor retornado pela função,
## forçando um cast automático.

<code>
function soma(int ...$valores):string {
return array_sum($valores);
}

var_dump(soma(2, 2));
echo soma(80, 20.5);
echo soma("4", 4.9);
</code>
</pre>
<br/>

<b>RESULTADO:</b><br/>
<br/>
<?php

# RETICÊNCIAS: indica a entrada de N valores como parâmetro

# TIPO: indica o tipo dos parâmetros, forçando um cast automático
## caso o parâmetro não seja um inteiro e causando uma exceção
## caso a conversão não seja possível
## (converter "oi" para inteiro, por exemplo)

# RETORNO; indica o tipo do valor retornado pela função,
## forçando um cast automático.

function soma(int ...$valores):string {
    return array_sum($valores);
}

var_dump(soma(2, 2));
echo "<br/>";
echo soma(80, 20.5);
echo "<br/>";
echo soma("4", 4.9);
echo "<br/>";

?>