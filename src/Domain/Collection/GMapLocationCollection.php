<?php

namespace Fifthgate\GMaps\Domain\Collection;

use Fifthgate\GMaps\Domain\Collection\Interfaces\GMapLocationCollectionInterface;
use Fifthgate\Objectivity\Core\Domain\Collection\AbstractDomainEntityCollection;

class GMapLocationCollection extends AbstractDomainEntityCollection implements GMapLocationCollectionInterface {

	public function toJson() : string {

		$jsonArray = [];
		var_dump($this->collection);
		foreach ($this->collection as $delta => $item) {
			$jsonArray[] = $item->toJson();
		}
		die();
	}
}