<?php

$i = 1;
$array = array();
while (isset($_POST["title".$i])) {
   $array[$_POST["title".$i]]=$_POST["values".$i];
   $i++;
}

$list = array();
$list2 = array();
 foreach ($array as $key => $value) {
    // 일반 배열 순서에 맞춰 하나씩 삽입
    $list[] = $key;
    $list2[] = $value;
    echo "$key => $value"."<br>";
 }

// count() : 배열의 길이 (= array.length)
 for ($i=0; $i <count($array) ; $i++) {
    echo "$list[$i] => $list2[$i]"."<br>";
 }

 $earth = array(
   "Asia" => array(
      "Korea" => "Seoul",
      "Japan" => "Tokyo"),
   "America" => array(
       "USA" => "Washington",
       "Mexico" => "MexicoCity"),
   "Europe" => array(
       "Spain" => "Mardrid",
       "France" => "Paris"));
  foreach ($earth as $continent => $value) {
    foreach ($value as $country => $capital) {
      echo "$continent, $country 의 수도는 $capital"."<br>";
    }
  }
 ?>
