<?php
class MyClass
{
	private $member;
	public function setMember($value)
	{
		$this->member = $value;
	}

	public function getMember()		{
		return $this->member;
	}
}

function foo($obj)
{
	$obj->setMember("foo");
}


//echo fnXOR();

function fnXOR()
{
 return  (1 and 0) xor (1 and 1);
} 

print fnXOR()?'true<br />':'false<br />';
//phpinfo();
//echo array_shift(explode("." ,(array_pop(explode("/", __FILE__)))));
$object = new MyClass();
$object->setMember("bar");
print $object->getMember();
print " : ";
foo($object);
print $object->getMember();

$arrLang = array("eins"=>"one","zwei"=>"two","drei"=>"three","vier"=>"four");
print '<br />';
foreach ($arrLang AS $de=>$en)
{
print "$de heisst $en<br />";
}