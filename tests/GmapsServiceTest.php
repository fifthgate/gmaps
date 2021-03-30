<?php

namespace Fifthgate\GMaps\Tests;

use Fifthgate\GMaps\Tests\GMapsTestCase as TestCase;
use Fifthgate\GMaps\Domain\GMapLocation;
use Fifthgate\GMaps\Domain\Collection\GMapLocationCollection;

class GmapsServiceTest extends TestCase {
	
	public function testObjectIntegrity() {
		$id = 987;
		$name = "Test Location";
		$address = "Address, Street, Postcode";
		$type = 'church';
		$lat = 52.18623534540682;
		$long = -4.3811734466237064;

		$location = GMapLocation::make(
			$id,
			$name,
			$address,
			$type,
			$lat,
			$long
		);
		$this->assertEquals($id, $location->getID());
		$this->assertEquals($name, $location->getName());
		$this->assertEquals($address, $location->getAddress());
		$this->assertEquals($type, $location->getType());
		$this->assertEquals($lat, $location->getLat());
		$this->assertEquals($long, $location->getLong());
	}

	public function testObjectToJson() {
		$id = 987;
		$name = "Test Location";
		$address = "Address, Street, Postcode";
		$type = 'church';
		$lat = 52.18623534540682;
		$long = -4.3811734466237064;

		$location = GMapLocation::make(
			$id,
			$name,
			$address,
			$type,
			$lat,
			$long
		);
		$jsonEncodedString = '{"id":987,"name":"Test Location","address":"Address, Street, Postcode","type":"church","lat":52.18623534540682,"long":-4.3811734466237064}';
		$this->assertEquals($jsonEncodedString, $location->toJson());
	}

	public function testCollectionIntegrity() {
		$collection = new GMapLocationCollection;
		$locationData =  [
			1 => [
				'name' => 'Test Location 1',
				'address' => 'Address 1, Street 1, Postcode 1',
				'type' => 'church',
				'lat' => 52.18623534540682,
				'long' => -4.3811734466237064
			],
			2 => [
				'name' => 'Test Location 2',
				'address' => 'Address 2, Street 2, Postcode 2',
				'type' => 'churchHall',
				'lat' => 52.19168144316052,
				'long' => -4.396065070532263
			]
		];
		foreach ($locationData as $id => $data) {
			$collection->add(GMapLocation::make($id, $data['name'], $data['address'], $data['type'], $data['lat'], $data['long']));
		}
		$this->assertEquals(2, $collection->count());
	}

	public function testCollectionToJson() {
		$collection = new GMapLocationCollection;
		$locationData =  [
			1 => [
				'name' => 'Test Location 1',
				'address' => 'Address 1, Street 1, Postcode 1',
				'type' => 'church',
				'lat' => 52.18623534540682,
				'long' => -4.3811734466237064
			],
			2 => [
				'name' => 'Test Location 2',
				'address' => 'Address 2, Street 2, Postcode 2',
				'type' => 'churchHall',
				'lat' => 52.19168144316052,
				'long' => -4.396065070532263
			]
		];
		foreach ($locationData as $id => $data) {
			$collection->add(GMapLocation::make($id, $data['name'], $data['address'], $data['type'], $data['lat'], $data['long']));
		}
/*
		var_dump($collection->toJson());
		die();*/
	}
}

