<?
//短标记
echo "Hello world";
class Bar {
  
}


class Foo extends Bar {
  function __construct() {
    parent::Bar();
  }
}

//use elseif
$a = true;
if ($a > 5) {
  echo "> 5";
} else if ($a > 3) {
  echo "> 3 and < 5";
}

//Lines should not be too long

function abcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmnabcdefghijklmn() {
  echo 'abc';
}

class Test {
  //The "var" keyword should not be used
  var $bar = 1;
}
?>
