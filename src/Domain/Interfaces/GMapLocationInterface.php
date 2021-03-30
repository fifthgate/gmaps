<?php

namespace Fifthgate\GMaps\Domain\Interfaces;

use Fifthgate\Objectivity\Core\Domain\Interfaces\DomainEntityInterface;

interface GMapLocationInterface extends DomainEntityInterface {
	
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

	public function toJson() : string;

	public function toArray() : array;
}