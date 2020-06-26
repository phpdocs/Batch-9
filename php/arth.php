<?php
    /**
     * Arthmetic Operators
     * https://phpdocs.com/php/arithmetic-operations
     * 
     */

    //Line Break Constant
     define("BR","<br />");
     define("HO","<h1>");
     define("HC","</h1>");

     //Value Var
     $a=20;
     $b=10;
     echo 'Value of $a='.$a.BR;
     echo 'Value of $b='.$b.BR;

     //Addition
     echo HO.'$a+$b='.($a+$b).HC;

     //Subtraction
     echo HO.'$a-$b='.($a-$b).HC;

     //Mul
     echo HO.'$a*$b='.($a*$b).HC;

     //Div
     echo HO.'$a/$b='.($a/$b).HC;

     //Mod
     echo HO.'$a%$b='.($a%9).HC;

     //Expo
     echo HO.'2 With Power of 3='.(2**3).HC;

?>