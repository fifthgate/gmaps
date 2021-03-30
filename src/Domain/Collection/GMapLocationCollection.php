<?php

namespace Fifthgate\GMaps\Domain\Collection;

use Fifthgate\GMaps\Domain\Collection\Interfaces\GMapLocationCollectionInterface;
use Fifthgate\Objectivity\Core\Domain\Collection\AbstractDomainEntityCollection;

class GMapLocationCollection extends AbstractDomainEntityCollection implements GMapLocationCollectionInterface {

	public function toJson() : string {

		return json_encode($this->toArray());
	}

	public function toArray() : array {
		$array = [];
		foreach ($this->collection as $delta => $item) {
			$array[] = $item->toArray();	
		}
		return $array;
	}
}