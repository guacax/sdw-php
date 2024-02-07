<?php

    // Addition de deux nombres entiers par addition successives de 1:

    function addition($a, $b) {
        $result = $a;
        for ($i=0; $i < $b; $i++) { 
            $result++;
        }
        return $result;
    }

    
  
?>