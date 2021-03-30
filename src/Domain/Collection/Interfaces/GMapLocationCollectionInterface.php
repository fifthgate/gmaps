<?php

namespace Fifthgate\GMaps\Domain\Collection\Interfaces;

use Fifthgate\Objectivity\Core\Domain\Collection\Interfaces\DomainEntityCollectionInterface;

interface GMapLocationCollectionInterface extends DomainEntityCollectionInterface {
	public function toJson() : string;

	public function toArray() : array;
}