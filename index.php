<?php

require __DIR__ . '/vendor/autoload.php';


use Shohag\Playground\AreaCalculator;
use Shohag\Playground\Shapes\Circle;
use Shohag\Playground\Shapes\Poligon;
use Shohag\Playground\Shapes\Rectengale;
use Shohag\Playground\Shapes\Squire;

$calculator = new AreaCalculator();
$calculator
	->addShape( new Circle( 5 ) )
	->addShape( new Rectengale( 5, 10 ) )
	->addShape( new Squire( 10 ) )
	->addShape( new Poligon( 8, 20, 6.8) );

echo $calculator->getAreasAsString() . PHP_EOL;
echo $calculator->getShapesCount() . PHP_EOL;