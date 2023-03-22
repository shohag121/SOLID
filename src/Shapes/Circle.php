<?php

namespace Shohag\Playground\Shapes;

class Circle implements Shape {
	public function __construct(public float $radius) {
	}

	public function getArea(): float {
		return ($this->radius * $this->radius) * pi();
	}
}