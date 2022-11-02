<?php
$L=5;

for ($i=0; $i<$L; $i++)
{
    for ($j=0; $j<=$L-($i+1); $j++)
        echo("  ");
    for ($j=0; $j<2*$i+1; $j++){
        echo(" *");
    }
    for ($j=0; $j<=$L-($i+1); $j++){
        echo("");
    }
    echo("<br>");
}

?>
