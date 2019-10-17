<?php
include 'dynamic_problem_answer.php';
function gcd ($a,$b) {
    $tmp = 0;
    $a_1 = $a;
    $b_1 = $b;
    if ($a_1 < $b_1) {
        $tmp = $a_1;
        $a_1 = $b_1;
        $b_1=$tmp;
    }

    while ($b_1 != 0) {
        $b_2 = $a_1 % $b_1;
        $a_1 = $b_1;
        $b_1=$b_2;
    }

    return $a_1;
}
class complex {
    public $r = 0;
    public  $i = 0;
    function __construct($a, $b) {
        $this->r = $a;
        $this->i = $b;
    }
    function render() {
        $sign = "";
        $c = "";
        $real = "";
        if ($this->i < 0) {
            $sign = "-";
            $this->i = abs($this->i);
        } else {
            $sign = "+";
        }
        if ($this->i==0) {
            // do nothing
        } else if ($this->i==1){
            $c = $sign . "i";
        } else {
            $c = $sign . $this->i . "i";
        }

        if ($this->r == 0) {
            $real = "";
        } else {
            $real = $this->r;
        }

        return $real . $c;
    }

}

function i_sqrt($c) {
       if ($c < 0) {
       $cmp = new complex(0,sqrt(abs($c)));
       return $cmp;
       } else {
       return sqrt($c);
       }
}


function add($a, $b) { // supports both complex and real addition
    if (get_class($a) == "complex" && get_class($b) == "complex") {
        $c = new complex(0,0);
        $c->r = ($a->r) + ($b->r);
        $c->i = ($a->i) + ($b->i);
        return $c;
    } else if (get_class($a) == "complex" && get_class($b) == FALSE) {
        
    } else if (get_class($a) == FALSE && get_class($b) == "complex") {
        
    } else {
        
    }
} 




function quadratic_formula($a_0,$b_0,$c_0) {
    $a=intval($a_0);
    $b=intval($b_0);
    $c=intval($c_0);
    $d = (pow($b,2) - (4*$a*$c));
    if ($d < 0){
        $complex = i_sqrt($d);
        $complex->i = $complex->i / (2*$a);
        $complex->r = (-1 * $b) / (2*$a);
        $cmp_str = $complex->render();
        $complex->i = -1 * $complex->i;
        $cmp_str_2 = $complex->render();
        $ans_1 = "x = ".$cmp_str.", ".$cmp_str_2;
        return $ans_1;
     return $ans_1;
   } else {
            $ans_1 = ((-1*$b) + sqrt(pow($b,2) - (4*$a*$c)))/(2*$a);
           $ans_2 =  ((-1*$b) - sqrt(pow($b,2) - (4*$a*$c)))/(2*$a);
            return "x=$ans_1, x=$ans_2";
    }

}

?>
