<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$MESSAGE = stream_get_line(STDIN, 100, "\n");

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

$tabT = str_split($MESSAGE, 1);

$base1 = 16;
$base2 = 2;
$result = "";
$bin_char = "";

for($c=0; $c<count($tabT); $c++){
    $hex_char = bin2hex($tabT[$c]);
    $bin_value = base_convert($hex_char, $base1, $base2);
    
    $bin_value = sprintf("%'.07d", $bin_value);

    $bin_char .= $bin_value;
}

$tabBin = str_split($bin_char, 1);
$current = $tabBin[0];
for($b=0; $b<count($tabBin); $b++){
    if($current != $tabBin[$b] || $b == 0){
        if($b != 0){
            $result .= " ";
        }
        if($tabBin[$b] == 1){
            $result .= "0 0";
        } else {
            $result .= "00 0";
        }
    } else {
        $result .= "0";
    }
    $current = $tabBin[$b];
}

echo($result."\n");
?>