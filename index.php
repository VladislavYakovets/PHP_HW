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

  if(($res > $res2) && ($res > $res3)){
    echo " Наибольшее число из введенных = $res ";
  }elseif(($res2 > $res) && ($res2 > $res3)){
    echo "Наибольшее число из введенных = $res2";
  }
    else{
      echo "Наибольшее число из введенных = $res3";
    }

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

$x = rand (-100, 100);
$y = rand (-100, 100);

  echo "Точка по оси Х = $x";
  echo '<br>';
  echo "Точка по оси Y = $y";
  echo '<br>';

  if($x == 0 && $y == 0){
    echo "Ваша точка находится в центре";
  } 
    elseif ($x >= 1 && $y >= 1){
    echo "Ваша точка находится в 1 четверти";
  } 
    elseif ($x <= -1 && $y >= 1){
    echo "Ваша точка находится во 2 четверти";
  } 
    elseif ($x <= -1 && $y <= -1){
      echo "Ваша точка находится в 3 четверти";
    }
    elseif ($x >= 1 && $y <= -1){
      echo "Ваша точка находится в 4 четверти";
    }
    elseif ($x == 0){
      echo "Ваша точка лежит на оси Y";
    }
    elseif ($y == 0){
      echo "Ваша точка лежит на оси X";
    }
