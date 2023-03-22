<?php

namespace Shohag\Playground;

class AreaCalculator extends Calculator {

	public function getShapesCount(): int {
		return count( $this->shapes );
	}

	public function getAreasAsString(): string {
		return  'Area: ' . parent::getAreas();
	}

}