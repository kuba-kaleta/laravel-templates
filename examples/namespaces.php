<?php
namespace Code\Html;

class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<h1>Table '{$this->title}' has {$this->numRows} rows.</h1>";
  }
}

$table = new Table();
$table->title = "My table";
$table->numRows = 5;
$table->message();

// regex
$str = "not ok";
$exp = "/ok/i";

print(preg_match($exp, $str));

class factorial_of_a_number
{
    protected $_n = 5;
    public function __construct()
    {
        
    }
    public function result()
    {
        $factorial = 1;
        for ($i = 1; $i <= $this->_n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

$newfactorial = new factorial_of_a_number();
echo $newfactorial->result();

class Product{
  public $name;
  public $description;
  public $price;

  function __construct($name, $description, $price){
      $this->name = $name;
      $this->description = $description;
      $this->price = $price;
  }

  function get_name(){
      print($this->name);
  }
  function set_name($name){
      $this->name = $name;
  }
}

$product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99);
$product2 = new Product('iPhone 12 Pro', 'This is a greater iPhone', 799.99);

print($product1->name);
print($product2->name);

?>
