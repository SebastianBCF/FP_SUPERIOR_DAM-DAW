<?php
for ($i = 1; $i <= 100; $i++){
    if($i %3 == 0 && $I % 5 ==0){
        echo "fizz/buzz";
    }elseif ($i % 3 == 0){
        echo"fizz";
    }elseif($i % 5 == 0){
        echo"buzz";
    }else{
        echo "$i";
    }
}
?>