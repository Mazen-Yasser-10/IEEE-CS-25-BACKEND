<?php
// Method One
echo gettype(100)."<br>";
// Method Two
echo var_dump(100)."<br>";
// Method Three => Optional
echo (is_integer(100)? "integer" : "not integer")."<br>";
?>