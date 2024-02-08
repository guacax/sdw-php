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

    
    // Multiplication par additions successives d'un des termes:

    function multiplication($a, $b) {
        $result = $a;
        for ($i= 0; $i < $b; $i++) {
            $result += $a;
        }
        return $result;
    }

    // Puissance par multiplications successives:

    function puissance($a, $b) {
        $result = 1;
        for ($i= 0; $i < $b; $i++) {
            $result *= $a;
        }
        return $result;
    }
    

    // Prendre 2 nombres et dire si il est multiple de l'autre ou non

    function mutilple($a, $b)  {
        if ($a % $b == 0) {
            echo $a . " est un multiple de " . $b;
        }
    }
  
?>