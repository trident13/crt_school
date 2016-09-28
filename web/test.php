<?php
// принять массив, вывести члены в строку
function problem_01($arr)
{
  $string = '';
  foreach($arr as $value){
    $string .= $value . ' ';
  }
  return $string;
}

echo problem_01([1,2,3]) . '<br>';
// implode()
// принять массив, вывести минимальный и максимальный элемент
function problem_02_min($arr)
{
  $check = $arr[0];
  foreach($arr as $value) {
    if ($value < $check) { $check = $value; }
  }
  return $check;
}

echo problem_02_min([1,2,3]) . '<br>';

function problem_02_max($arr)
{
  $check = $arr[0];
  foreach($arr as $value) {
    if ($value > $check) { $check = $value; }
  }
  return $check;
}

echo problem_02_max([1,2,3]) . '<br>';
//min()
//max()

// вывести массив в обратном порядке

function problem_03($arr)
{
  $reverse = array();
  for($i=0;$i<count($arr); $i++) {
    $y = count($arr) - ($i+1);
    $reverse[$i] = $arr[$y];
  }
  return $reverse;
}
echo var_dump(problem_03([3,2,1])) . '<br>';
// array_reverse()
// принять массив, вывести уникальные, формат вывод неважен
function problem_04($arr)
{
  $result = array();
  foreach($arr as $value) {
    if(!in_array($value, $result)) {
      $result[] = $value;
    }
  }
  return $result;
}
echo var_dump(problem_04([2,1,3,3,5,8])) . '<br>';
// принять ассоциативный массив, поменять ключ и значения местами и вывести в виде массива
function problem_05($arr)
{
  $reverse = array();
  foreach($arr as $key=>$value) {
    $reverse[$value] = $key;
  }
  return $reverse;
}

echo var_dump(problem_05(["Оля" => 3, "Маша" => 2])) . '<br>';
// array_flip()
// подстрока строка вывести целую строку потом подстроку позицию
function problem_06($arr)
{
  $substr = $arr[0];
  $string = $arr[1];
  $del = 0;
  for($i=0;$i<strlen($string);$i++){
    for($y=0;$<strlen($substr);$y++){
      if($substr[$y] == $string[$i]) {
        if($del != strlen($substr)){
          $del++;
        }
      }
    }
  }
}
