<b>FUNÇÃO RECURSIVA:</b>

<pre>
<code>
    function fatorial($num) {
        return $num > 1 ? $num * fatorial($num - 1) : 1;
    }

</code>
</pre>

<b>RESULTADO:</b>
<br/><br/>

<?php

function fatorial($num)
{
    if ($num <= 1) {
        echo 1;
        return 1;
    }
    else {
        echo "$num * ";
        return $num * fatorial($num - 1);
    }
}

$num = 5;

echo "$num! = ";
echo " = " . fatorial($num);

?>