
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<table style="border: 3px solid green"
  <?php for($a=1; $a <=10; $a++){?>
        <tr>
        <?php for($b=1; $b <=10; $b++){?>
        <td><?php echo $a * $b; ?></td>
    <?php } ?>
        </tr>
    <?php } ?>
  </table>
</body>
</html>


<?php

// №1
  echo '<br/>';
  echo '<br/>';


$array = [-4, 6, 4, -10, 8, 9, 0, -1, -3, 10];
$pozitiv = [];
    for($i=0; $i < count($array); $i++){
      if ($array[$i] >= 0)
      $pozitiv[] = $array[$i];
    }

  echo '</pre>';
    print_r($pozitiv);
  echo '</pre>';


  echo '<br/>';
  echo '<br/>';

//№2

$array2 = [1,2,3,4,10,50,70,100];
$values = [];
  $values = array_sum($array2)/count($array2);
  foreach ($array2 as $key => $index){
    if ($index > $values){
        echo $key.' ';
    };
};

  echo '<br/>';
  echo '<br/>';

//№3

$array3 = [4, 6, 5, 10, 12, 9, 0, 3, 2];
$z = [];
  for($i=1; $i < count($array3); $i++){
      if($array3[$i] > $array3[$i-1])
      $z[] = $array3[$i];
  }

  echo '</pre>';
    print_r($z);
  echo '</pre>';

  echo '<br/>';
  echo '<br/>';

//№4

$array4 = [4, 5, 5, 10, 12, 10, 0, 3, 12];
$y = [];
  foreach ($array4 as $number){
    if (in_array($number, $y) == true){
        echo 'Есть повторяющейся элементыыыы'." ". $number ."<br>";
        
  };
    $y[] = $number;
};
  if ($array4 == $y){
  echo "Больше нет повторяющихся элементоввввв";
};

echo '<br/>';
echo '<br/>';

//№5

$array5 = [4, 5, 5, 10, 12, 10, 0, 0, 3, 12, 17, 15];
$G = [];
foreach ($array5 as $key => $znak){
    if (in_array($znak, $G) == true){
        unset($array5[$key]);
    };
    $G[] = $znak;
};
echo '<pre>';
print_r ($array5);
echo '</pre>';

echo '<br/>';
echo '<br/>';

//№6

$array6 = [2,6,
  [4, 3]
];
foreach ($array6 as $key => $item){
  if (is_array($item) == true){
      echo 'Является двумернымммм';
      $arrayDouble = true;
      break;
  }
};
if ($arrayDouble == false){
  echo 'Не является двумернымммм';
};

