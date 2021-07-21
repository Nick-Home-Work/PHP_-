<?php
//trait extends
abstract class Product
{
	protected $price;
	protected $quantity;
	abstract protected function finalCost($price, $quantity);

}

class digitalGoods extends Product
{
	function finalCost($price, $quantity= 1){
	   static $profit = 0;
	   $profit +=	$price; // счетчик дохода
	    echo 'цена =' . $price . 'общий дохол =' . $profit;
	}

}

class pieceGoods extends Product
{

	function finalCost($price, $quantity){
	   static $profit = 0;
	   $profit += $price * $quantity; // счетчик дохода
	   echo 'цена =' . $price * $quantity . 'общий дохол =' . $profit;
	}

}

class weightGoods extends Product
{

	function finalCost($price, $quantity){
	   static $profit = 0;
	   $profit += $price * $quantity; // счетчик дохода
	   echo 'цена =' . $price * $quantity . 'общий дохол =' . $profit;
	}

}
//прищлось из за дохода многодкбдировать код - не сообразил - жумать еще надо - разжедять  - скорее всего в абстракции будет считать цену - а счетчик каэдому свой - неуспел! - но все работает!!!
$class1 = new weightGoods();
$class1->finalCost(100, 1.5 );
$class1->finalCost(160, 3.5 );

$class1 = new digitalGoods();
$class1->finalCost(50);
$class1->finalCost(160 );
?>

<?php
 trait Help
 {
	private static $a;
	 public static function getInstanse()
	 {
		 if(self::$a){
			 return self::$a;
		 }
		 return self::$me = new self();
	 }
 }
 class DB{
	use Help;
	public function doAction() {echo 'all right'; }
 }
 $a = (new DB)->doAction();
?>
