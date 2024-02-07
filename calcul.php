<?php

    // Addition de deux nombres entiers par addition successives de 1:

    function addition($a, $b) {
        $result = $a;
        for ($i=0; $i < $b; $i++) { 
            $result++;
        }
        return $result;
    }

      // Soustraction de deux nombres entiers par soustractions successives de 1:
    
      function soustraction($a, $b) {
        $result = $a;
        for ($i= 0; $i < $b; $i++) {
            $result--;
        }
        return $result;
    }

    
    
    
  
?>