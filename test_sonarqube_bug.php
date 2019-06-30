<?php
//"require_once" and "include_once" should be used instead of "require" and "include"
require "lib.php";

//=+ should not be used instead of +=
$target = -5;
$num = 3;
$target =- $num;

//"exit(...)" and "die(...)" statements should not be used
if ($num == 3) {
  die(123);
}

//print_abc();
print_abc();

//A "for" loop update clause should move the counter in the right direction-- 循环的方向要正确
$length = 10;
for ($i = 0; $i < $length; $i--) { // Noncompliant
  echo $i . "<br />";
}

//All branches in a conditional structure should not have exactly the same implementation 分支的逻辑不能是相同的
if ($num == 3) {
  echo "same";
} else {
  echo "same";
}

//Errors should not be silenced　错误不应该被掩盖
@print_abc();

//Exception should not be created without being thrown 创建了异常就应该抛出
if ($target < 0)
  new Exception('$x must be nonnegative');

//Failed unit tests should be fixed 失败的单元测试要修复
//暂无

//Files should not contain characters before "<?php"　<?php 符号之前不能有字符

//Function argument names should be unique //函数形参是唯一的
function compute($a, $a, $c) { // Noncompliant
}

compute(1, 2, 3);

//Identical expressions should not be used on both sides of a binary operator 比较操作符两端不能一样
$a = 10;
if ( $a == $a ) { // always true
  print("equal");
}

//Jump statements should not be followed by dead code 跳转代码后面不应该再跟着死代码
function fun($a) {
  $i = 10;
  return $i + $a;
  $i++;             // dead code
}


