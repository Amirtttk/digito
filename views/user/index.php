<?php
$getInformation = getInformation();
if ($getInformation['theme'] == 1){
    include "index1.php";
}
if ($getInformation['theme'] == 2){
    include "index2.php";
}
if ($getInformation['theme'] == 3){
    include "index3.php";
}
