<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N
);

$chevaux = array();

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $Pi
    );
    $chevaux[] = $Pi;
}

asort($chevaux);

$min = -1;
$cheval2 = 0;
foreach($chevaux as $cheval){
    if($min == -1 || abs($cheval-$cheval2) < $min){
        $min = abs($cheval-$cheval2);
    }
    $cheval2 = $cheval;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
echo($min."\n");
?>