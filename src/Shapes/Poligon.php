<?php

namespace Shohag\Playground\Shapes;

class Poligon implements Shape {

	public function __construct(private float $number, private float $length, private float $radius) {
	}

	public function getArea(): float {
		return ( $this->number/2 ) * $this->length * $this->radius;
	}
}