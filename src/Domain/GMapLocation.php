<?php

namespace Fifthgate\GMaps\Domain;

use Fifthgate\GMaps\Domain\Interfaces\GMapLocationInterface;

class GMapLocation implements GMapLocationInterface {
	
	protected $id;

	protected string $name;

	protected string $address;

	protected string $type;

	protected float $lat;

	protected float $long;

	public static function make(
		$id,
		string $name,
		string $address,
		string $type,
		float $lat,
		float $long
	) {
		return new self($id, $name, $address, $type, $lat, $long);
	}

	public function __construct(
		$id,
		string $name,
		string $address,
		string $type,
		float $lat,
		float $long
	) {
		$this->id = $id;
		$this->name = $name;
		$this->address = $address;
		$this->type = $type;
		$this->lat = $lat;
		$this->long = $long;
	}

	public function getID() {
		return $this->id;
	}

	public function getAddress() : string {
		return $this->address;
	}

	public function getType() : string {
		return $this->type;
	}

	public function getLat() : float {
		return $this->lat;
	}

	public function getLong() : float {
		return $this->long;
	}

	public function getName() : string {
		return $this->name;
	}

}