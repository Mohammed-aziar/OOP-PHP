<?php
/*
    Class Abstraction
    -   cannot be instantiated [cannnot create object from]
    -   made for other classes to inherit prop & methods from
    -   can have methods & propreties 
    -   can have abstractes method and no abstracted methods
    -   Abstract methods [contains no body code]
*/
abstract class MakeDivace{
    public $ram;
    public function sayHello(){
        echo "say hello";
    }
    abstract public function sayBye();
    abstract public function saytest();
}
class AppleDivace extends MakeDivace {
    public function sayBye(){
        echo "bye";
   }
    public function saytest(){
        echo "test";
    }
}
$iphone =   new AppleDivace();
var_dump($iphone);
echo $iphone->sayBye();
echo $iphone->saytest();

?>