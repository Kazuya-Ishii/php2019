<?php
echo "hello world!" ;
$a = 3 ;
$b = 7 ;
echo $a + $b;
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
$hello = "Hello,";
$name = "Kazuya";
$world = "'s World!";
echo $hello . $name . $world;
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
$calendar_2018 = [
  "January" => "1月",
  "Feburary" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "july" => "7月",
  "August" => "8月",
  "Septembar" => "9月",
  "Octouber" => "10月",
  "November" => "11月",
  "December" => "12月",
];
echo $calendar_2018["December"];

if ($name == "Kazuya"){
  echo "私は$name です。";
}else {
  echo "$name ではありません。";
}
$total = 0;
for($i = 0; $i <= 10000; $i++){
  $total += $i;
}
echo $total;
$fruits = array("apple","orange","lemon","pinapple","cheery");
foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
  echo $i;
  echo "\n";}
}
?>
