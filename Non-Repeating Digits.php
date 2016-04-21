<?php
function FindsAll3digitNum($n){
    if($n < 102){
        echo 'no';
    }else{
        for($i = 102;$i <= $n;$i++){
            $firstD = intval($i/100);
            $secondD = ($i/10)%10;
            $thirdD = $i%10;
           
            if(($thirdD != $firstD)&&
                ($thirdD != $secondD)&&
                ($firstD != $secondD)){
                if($i < 1000) {
                    echo $i.'<br/>';
                }
            }
        }
    }
    echo '<br/>';
}
//$num = 1234;
//FindsAll3digitNum($num);
$num = 15;
FindsAll3digitNum($num);
$num = 145;
FindsAll3digitNum($num);
$a=103;
FindsAll3digitNum($a);
?>