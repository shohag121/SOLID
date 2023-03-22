<?php

namespace Shohag\Playground\Shapes;

class Rectengale implements Shape {
	public function __construct(public float $height, public float $width) {
	}

	public function getArea(): float {
		return $this->height * $this->width;
	}
}