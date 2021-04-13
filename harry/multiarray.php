<?php 

$multiDim= [
    [2,5,7,8],
    [1,2,3,1],
    [4,5,0,1]
];
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j <count($multiDim[$i]) ; $j++) { 
        echo ($multiDim[$i][$j]);
        echo " ";
    }
    echo "\n";
}
// var_dump($multiDim[2][3]);
?>