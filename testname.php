<?php

//phpinfo();
//echo basename( __FILE__) . "<br />";

//echo array_shift(explode("." ,(array_pop(explode("/", __FILE__)))));

phpinfo();
print_r( explode(".",  basename( __FILE__)));

echo array_shift(explode(".",  basename( __FILE__)));

?>