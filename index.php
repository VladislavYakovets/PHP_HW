<?php

// HW1 

$res = rand(0, 100);
  echo $res ;
  echo '<br>';

$res2 = rand(0, 100);
  echo $res2 ;
  echo '<br>';

$res3 = rand(0, 100);
  echo $res3 ;
  echo '<br>';

  $otvet = max ($res, $res2, $res3);
  echo " Наибольшее число из введенных = $otvet ";

  echo '<br>';

//HW2
if(($res == $res2) || ($res == $res3) || ($res2 == $res3) || (($res == $res2) && ($res2 == $res3))){
  echo "Ошибка";
  } elseif((($res > $res2) && ($res < $res3)) || (($res < $res2) && ($res > $res))){
    echo "Среднее число из введенных = $res";
  } elseif ((($res2 > $res) && ($res2 < $res3)) || (($res2 < $res) && ($res2 > $res3))){
    echo "Среднее число из введенных = $res2";
  } 
  else{
    echo "Среднее число из введенных = $res3";
  }

  echo '<br>';
  echo '<br>';

// HW3

$circle = rand (0, 360);
  echo $circle;
  echo '<br>';

  if($circle <=90 && $circle >= 0){
    echo "Ваша точка находится в 1 четверти";
  } 
    elseif ($circle <= 180 && $circle >= 91){
    echo "Ваша точка находится в 2 четверти";
  } 
    elseif ($circle <= 270 && $circle >= 181){
    echo "Ваша точка находится в 3 четверти";
  } 
    elseif ($circle <= 360 && $circle >= 271){
      echo "Ваша точка находится в 4 четверти";
    }
    echo '<br>';
    echo '<br>';
