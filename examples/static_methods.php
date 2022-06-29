<?php

// static_methods.php

namespace MyStatic{

class greeting {
  private static function welcome() {
    echo "Welcome<br>";
  }

  public function __construct() {
    self::welcome();
  }
}

class pi {
  private static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$greet = new greeting();

$pi = new pi();
echo $pi->staticValue();

}

?>
