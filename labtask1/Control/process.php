<?php

    $value1=$_POST["value1"];
    $value2=$_POST["value2"];
    $CALC=$_POST["CALC"];
    if($CALC == "+")
    {
        echo "addition",$value1+$value2;
    }
    if($CALC == "-")
    {
        echo "subtraction",$value1-$value2;
    }if($CALC == "*")
    {
        echo "multiplication",$value1*$value2;
    }if($CALC == "/")
    {
        echo "division",$value1/$value2;
    }
?>