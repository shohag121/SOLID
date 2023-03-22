<?php

namespace Shohag\Playground\Shapes;

class Squire extends Rectengale {

	public function __construct( public float $length ) {
		parent::__construct( $this->length, $this->length );
	}
}