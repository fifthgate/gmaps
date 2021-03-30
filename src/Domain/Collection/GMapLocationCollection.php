<?php

namespace Fifthgate\GMaps\Domain\Collection;

use Fifthgate\GMaps\Domain\Collection\Interfaces\GMapLocationCollectionInterface;
use Fifthgate\Objectivity\Core\Domain\Collection\AbstractDomainEntityCollection;

class GMapLocationCollection extends AbstractDomainEntityCollection implements GMapLocationCollectionInterface {

	public function toJson() : string {

		$jsonArray = [];
		foreach ($this->collection as $delta => $item) {
			$jsonArray[] = $item->toArray();
		}
		return json_encode($jsonArray);
	}
}