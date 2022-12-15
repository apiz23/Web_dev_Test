<?php
    function f($even){
        echo "f(even) = (";
        for($i = 2; $i <= $even; $i += 2){
            if($i == 100){
                echo $i .")";
            }else{
                echo $i . ", ";
            }
        }
    }
    f(100);
?> 

