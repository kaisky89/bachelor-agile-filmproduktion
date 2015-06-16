<pre>
<?php

$string = $_GET['string'];
$replace = $_GET['replace'];

$arr = array('regex' => preg_quote($string));
$arr['replace'] = $replace;

json_encode($arr, JSON_PRETTY_PRINT);

?>
</pre>