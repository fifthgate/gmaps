<?php

namespace Fifthgate\GMaps\Domain\Interfaces;

interface GMapLocationInterface {
	
	public static function make(
		$id,
		string $name,
		string $address,
		string $type,
		float $lat,
		float $long
	);

	public function getID();

	public function getName() : string;
	
	public function getAddress() : string;

	public function getType() : string;

	public function getLat() : float;

	public function getLong() : float;
}