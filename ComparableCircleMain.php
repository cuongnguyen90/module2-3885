<?php
include ("ComparableCircle.php");

$circleOne = new ComparableCircle('one',6);
$circleTwo = new ComparableCircle('two',16);

var_dump($circleOne->compareTo($circleTwo));