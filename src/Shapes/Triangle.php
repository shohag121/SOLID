<?php

namespace Shohag\Playground\Shapes;

class Triangle implements Shape {

	public function __construct(public float $base, public float $height) {
	}

	public function getArea(): float {
		return ( $this->base * $this->height ) / 2;
	}
}