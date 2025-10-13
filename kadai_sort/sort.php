<?php

$nums = [15, 4, 18, 23, 10 ];

function sort_2way($array, $order = "asc"){
  $count = count($array);
  $i = 0;

  while($i < $count - 1){
    $j = 0;
    while($j < $count - $i - 1){
      $swap = false;

      if($order === "asc" && $array[$j] > $array[$j + 1]){
        $swap = true;
      } elseif ($order === "desc" && $array[$j] < $array[$j + 1]){
        $swap = true;
      }

      if ($swap){
        $temp = $array[$j];
        $array[$j] = $array[$j + 1];
        $array[$j + 1] = $temp;
      }
      $j++;
    }
    $i++;
  }
  return $array;
}

$sorted_asc = sort_2way($nums,"asc");

$sorted_desc = sort_2way($nums,"desc");

echo "昇順にソートします。<br>";
foreach($sorted_asc as $num){
  echo $num . "<br>";
}

echo"<br>";

echo"降順にソートします。<br>";
foreach($sorted_desc as $num) {
 echo $num . "<br>";
}

?>