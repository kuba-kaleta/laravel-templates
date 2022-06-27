<?

class Fruit{
    public $name;
    protected $color;
    private $weight;

    const f_const = "Fruit const message ";

    function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        echo "Fruit constructor<br>";
    }
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
    function set_weight($weight){
        $this->weight = $weight;
    }
    function get_weight(){
        return $this->weight;
    }

    public function f_mess_publ(){
        echo "Fruit public method {$this->name}, {$this->color}, {$this->weight}<br>";
    }
    protected function f_mess_prot(){
        echo "Fruit protected method {$this->name}, {$this->color}, {$this->weight}<br>";
    }
    private function f_mess_priv(){
        echo "Fruit private method {$this->name}, {$this->color}, {$this->weight}<br>";
    }

    public function f_mess_priv2publ(){
        $this->f_mess_priv();
    }
    public function f_const_mess_publ(){
        print(self::f_const . "method public<br>");
    }
}

class Strawberry extends Fruit{ // inherited class
    function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        echo "Strawberry constructor<br>";
    }
    public function s_mess_publ(){
        echo "Strawberry public message<br>";
    }
    protected function s_mess_prot(){
        echo "Strawberry protected message<br>";
    }
    private function s_mess_priv(){
        echo "Strawberry private message<br>";
    }

    public function f_const_mess_prot2publ(){
        $this->f_mess_prot();
    }
    public function s_mess_priv2publ(){
        $this->s_mess_priv();
    }
}

$fruit = new Fruit("Fruitname", "Fruitcolor", "Fruitweight"); // instance of the class
$strawberry = new Strawberry("Strawberryname", "Strawberrycolor", "Strawberryweight");
print("<br>");

print($fruit->name . "<br>"); //wyswietlane najdalsze mozliwe
print($strawberry->name . "<br><br>");

$fruit->set_weight("Fruitweight1");
print($fruit->get_weight() . "<br>");
$strawberry->set_weight("Strawberryweight1");
print($strawberry->get_weight() . "<br><br>");

$fruit->f_mess_priv2publ();
$strawberry->f_const_mess_prot2publ();
$strawberry->s_mess_priv2publ();

print($fruit::f_const. "<br>");
$fruit->f_const_mess_publ();

?>
