<?php 
for ($i=0; $i <=20 ; $i++) { 
    for ($j=0; $j <=33 ; $j++) { 
        if($i*5+$j*3+(100-$i-$j)/3==100){
            echo $i.','.$j.','. (100-$i-$j) .'</br>';
        }
    }
}