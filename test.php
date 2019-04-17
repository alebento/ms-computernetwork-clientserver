<?php 
    //echo $argv[1]." = ";
    //echo $argv[2];

    $path    = getcwd().'/test';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $key => $value) {
    echo $value;
}
?>