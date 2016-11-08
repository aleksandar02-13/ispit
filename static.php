<?php
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

// $obj = new foo();
// $myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
// $obj->value = 2;
// echo $myValue; 

class ParentC
{
	public $tplFile = "mica";
	function __construct($tplFile) {
		$this->$tplFile= $tplFile;
		echo $this->$tplFile."<br>";
	}
}

class ChildC extends ParentC
{
}
$foo = new ChildC("mica");
// echo $foo->mica;

try
{
mica(2,3);
}
catch(Exception $e)
{
	print_r($e->getPrevious()); 
}

echo "Nastavak programa";



// -hashing
// -php background
// -static memory_get_peak_usage
// -method chaining, autoloading
// -salt (login, registry)
// -error handler
// -konstruktor isti naziv promenljive

?>



