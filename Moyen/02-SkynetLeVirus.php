<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d %d",
    $N, // the total number of nodes in the level, including the gateways
    $L, // the number of links
    $E // the number of exit gateways
);
$tabL = array();
$tabLT = array();
for ($i = 0; $i < $L; $i++)
{
    fscanf(STDIN, "%d %d",
        $N1, // N1 and N2 defines a link between these nodes
        $N2
    );
    $tabLT[] = $N1." ".$N2;
}

$tabE = array();
for ($i = 0; $i < $E; $i++)
{
    fscanf(STDIN, "%d",
        $EI // the index of a gateway node
    );
    $tabE[] = $EI;
}

foreach($tabLT as $key => $value){
    $tabValue = explode(" ", $value);
    
    for($p=0; $p<count($tabE); $p++){
        if(in_array($tabE[$p], $tabValue)){
            $tabL[] = $value;
        }
    }
}

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $SI // The index of the node on which the Skynet agent is positioned this turn
    );

    $keyToDel = 0;
    
    foreach($tabL as $key => $value){
        $tabValue = explode(" ", $value);
        
        if(in_array($SI, $tabValue)){
            $keyToDel = $key;
        }
    }
    
    echo($tabL[$keyToDel]."\n");
    unset($tabL[$keyToDel]);
    $tabL = array_values($tabL);error_log(var_export($tabL, true));
}
?>