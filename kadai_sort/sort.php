<?php

$nums = [15, 4, 18, 23, 10];

function sort_2way($array, $order = true) {
  if ($order) {
    // 昇順ソート（TRUE）
    sort($array);
    echo "昇順にソートします。<br>";
  } else {
    // 降順ソート（FALSE）
    rsort($array);
    echo "降順にソートします。<br>";
  }

  // 出力処理
  foreach ($array as $num) {
    echo $num . "<br>";
  }
}

// 昇順ソート（TRUE指定）
sort_2way($nums, true);

echo "<br>";

// 降順ソート（FALSE指定）
sort_2way($nums, false);

?>
