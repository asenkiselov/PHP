<?php
function OutputResult($variable){
    if(!is_numeric($variable)) {
        echo gettype($variable).'<br/>';
    }else {
        var_dump($variable);
    }
}
$str = 'hello';
OutputResult($str);
$numInt = 15;
OutputResult($numInt);
$numFl = 1.234;
OutputResult($numFl);
$numArr = array(1,2,3);
OutputResult($numArr);
$obj = (object)[2,34];
OutputResult($obj);
?>