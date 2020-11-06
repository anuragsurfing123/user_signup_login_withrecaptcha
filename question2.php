<?php


for($x=1;$x<=100;$x++){
    if($x%3==0 and $x%5!=0){
        echo "Fizz".'<br>';
    }
    else if($x%5==0 and $x%3!=0){
        echo "Buzz".'<br>';
    }
    else if(($x%3==0 and $x%5==0)){
        echo 'FizzBuzz'.'<br>';
    }
    else{
        echo $x.'<br>';
    }
}

?>