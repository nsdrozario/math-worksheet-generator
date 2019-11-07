<?php

define("EPILSON", 0.0000001);    

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
        $complex->i = round($complex->i / (2*$a), 4);
        $complex->r = round((-1 * $b) / (2*$a), 4);
        $cmp_str = $complex->render();
        $complex->i = -1 * $complex->i;
        $cmp_str_2 = $complex->render();
        $ans_1 = "x = ".$cmp_str.", ".$cmp_str_2;
        return $ans_1;
     return $ans_1;
   } else {
            $ans_1 = round(((-1*$b) + sqrt(pow($b,2) - (4*$a*$c)))/(2*$a),4);
           $ans_2 =  round(((-1*$b) - sqrt(pow($b,2) - (4*$a*$c)))/(2*$a),4);
            return "x=$ans_1, x=$ans_2";
    }

}

function parametric_1($x1,$y1,$x2,$y2,$t) {
   $sign_x = "";
   $sign_y = "";
   
    if ((intval($x2)-intval($x1)) < 0) {
        $sign_x = "-";
    } else {
        $sign_x = "+";
    }
    
    if ((intval($y2)-intval($y1)) < 0) {
        $sign_y = "-";
    } else {
        $sign_y = "+";
    }
    
    $dtx = abs(intval($x2-$x1) / intval($t));
    $dty = abs(intval($y2-$y1) / intval($t));
    
    $x_p = $x1 . $sign_x . $dtx;
    $y_p = $y1 . $sign_y . $dty;
    
    return "(" . $x_p . "," . $y_p . ")";
}

function poly_to_func($str) { // fix this
    $coefficients = array();
    $degrees = array();
   
    $terms = explode("[+]", $str);

    for ($i=0; $i < count($terms); $i++) {
         $degrees[$i] = substr($terms[$i], -1);
         $coefficients[$i] = substr($terms[$i], 0,1);
    }

   
   /*
    $c = preg_match_all("([-]?\d)[x]\^\d", $str, $coefficients);
    $d = preg_match_all("[-]?\d[x]\^(\d)", $str, $degrees);*/
    return function($x) use ($coefficients, $degrees) {
        $sum = 0;
        for ($i=0; $i<count($degrees); $i++) {
            $sum += pow(floatval($x), floatval($degrees[$i])) * floatval($coefficients[$i]);
        }
        return $sum;
    };
}

function derivative($f,$x) {
    return round(floatval($f($x+EPILSON) - $f($x)) / EPILSON, 3); 
}

function pythag_theorem($a,$b)
{
    $ab = pow($a,2) + pow($b,2);
    return sqrt($ab);

}

function standard_to_vertex($a,$b,$c)
{
    $h = (0 - $b)/(2 * $a);
    $k = (pow($h,2) * $a) + ($b * $h) + $c;
    return "y = " . $a . "(x - " . $h . ")^2 + " . $k;        //Exponent could be superscrippted to look better 
}

?>
