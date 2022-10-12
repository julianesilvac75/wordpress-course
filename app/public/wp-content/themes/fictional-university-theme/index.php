<?php
  $names = array('Juliane', 'John', 'Jane', 'Meowsalot', 'Barksalot');

  // $count = 1;

  // while($count <= 100) {
  //   echo "<li>$count</li>";
  //   $count++;
  // }

  $count = 0;

  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count].</li>";
    $count++;
  }
?>
