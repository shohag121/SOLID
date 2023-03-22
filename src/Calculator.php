<?php

namespace Shohag\Playground;

use Shohag\Playground\Shapes\Shape;

class Calculator {
	protected array $shapes = array();

	public function addShape( Shape $shape ): self {
		$this->shapes[] = $shape;
		return $this;
	}

	public function getAreas(): float {
		return array_sum( array_map( fn($shape) => $shape->getArea(), $this->shapes ) );
	}

}