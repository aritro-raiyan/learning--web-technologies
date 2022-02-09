<?php
      $num1=10;
      $num2=30;
      $num3=20;
      if($num1>$num2 && $num1>$num3){
        print $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
         print $num2;
        }
        else
          print $num3;
      }
?>