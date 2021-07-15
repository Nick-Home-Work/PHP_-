<?php
// class Product
// метод - viewProduct() - вывод на экран вессь продукт
//свойства : protected $id;
	 //protected $title;
	// protected $price;
	// protected $description;


 class Product{

	 protected $id;
	 protected $title;
	 protected $price;
	 protected $description;

	 public function __construct($id ,$title){
		 $this -> id = $id;
		 $this -> title = $title;
	 }
	 public function getPrice(){
		 return $this -> price;
	 }
	 public function getDescription(): string{
		 return $this -> description;
	 }
	 public function setPrice($price){
		 return $this -> price = $price;
	 }
	 public function setDescription($description){
		 return $this -> description = $description;
	 }
	 public function viewProduct(): void{
		 echo $this -> title;
		 echo $this -> description;
		 echo $this -> price;
	 }
 }
// наследник $monitor
//отличие: setPrice и setDescription
$monitor = new Product(1,' Монитор samsung ');
$monitor ->setPrice(5000);
$monitor ->setDescription('  Какие то технические характеристики  ');
$monitor -> viewProduct();


?>
<?php
echo '</br></br></br>' . "Задание 5" . '</br>';
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
echo '</br>' . "static принадлежит классу A - поэтому посчитано количество вызовов foo()" . '</br>';
echo '</br></br></br>' . "Задание 6" . '</br>';
class A1 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A1 {
}
$a1 = new A1();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
echo '</br>' . "Эдесь класс B имеет свою(extends) public function foo()
и и отсчет вызовов foo() - велся паралельно" . '</br>';
echo '</br></br></br>' . "Задание 7" . '</br>';
class A2 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B1 extends A2 {
}
$a1 = new A2;
$b1 = new B1;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
echo '</br>' . "Эдесь класс B имеет свою(extends) public function foo() а a1 - работала с function из класса A
и  отсчет вызовов foo() - велся паралельно" . '</br>';
?>
