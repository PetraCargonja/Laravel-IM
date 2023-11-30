<?php

use Geometry\Circle;
use Geometry\Circle as GeometryCircle;

require_once 'Geometry/Circle.php';
require_once 'Geometry/Constants.php';

// using the 'use' statement
$circle = new Circle(5);
echo $circle->getDiameter() . PHP_EOL;

// using the 'use' statement and the 'as' keyword
$circleAsAlias = new GeometryCircle(5);
echo $circleAsAlias->getArea() . PHP_EOL;

// using the fully qualified name
$circleAsFQN = new \Geometry\Circle(5);
echo $circleAsFQN->getCircumference() . PHP_EOL;