<?php
echo "Hoeveel landen ga je toevoegen?" . PHP_EOL;
$input1 = readline();
$a = array();

if ($input1 != is_numeric($input1)) {
  echo $input1 . "is geen getal";
  exit;
}
for ($i=0; $i <$input1 ; $i++) {
  echo " Welk land wil je toevoegen? ";
   $a[$input2 = readline()] = $input3 = readline( " Wat is de hoofdstad van $input2 ");
}

  echo "De volgende landen en steden zitten in de database" . PHP_EOL;
foreach ($a as $key => $value) {
  print($key . " " . $value . PHP_EOL);
}
 ?>
