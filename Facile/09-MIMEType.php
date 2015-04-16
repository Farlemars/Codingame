<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N // Number of elements which make up the association table.
);
fscanf(STDIN, "%d",
    $Q // Number Q of file names to be analyzed.
);

$tabMIME = array();

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
    $tabMIME[strtolower($EXT)] = $MT;
}

for ($i = 0; $i < $Q; $i++)
{
    $FNAME = stream_get_line(STDIN, 500, "\n"); // One file name per line.
   
    $tabFile = explode(".", $FNAME);
    
    if(!array_key_exists(strtolower($tabFile[count($tabFile)-1]), $tabMIME) || $tabFile[count($tabFile)-1] == "" || count($tabFile) <= 1){
        echo("UNKNOWN\n");
    } else {
        echo($tabMIME[strtolower($tabFile[count($tabFile)-1])]."\n");
    }
}
?>