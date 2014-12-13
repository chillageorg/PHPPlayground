<?php
Class parentClass {
	static $strHello = 'Hello from parent';
	static function fHello() {
		print static::$strHello;
	} 
}

Class childClass Extends parentClass{
	static $strHello = 'Hello from child';
}

childClass::fHello();