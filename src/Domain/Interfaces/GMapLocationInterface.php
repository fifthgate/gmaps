<?php

declare(strict_types=1);

namespace Fifthgate\GMaps\Domain\Interfaces;

use Fifthgate\Objectivity\Core\Domain\Interfaces\DomainEntityInterface;

interface GMapLocationInterface extends DomainEntityInterface
{
    public static function make(
        $id,
        string $name,
        string $address,
        string $type,
        float $lat,
        float $long
    );
    public function getName(): string;

    public function getAddress(): string;

    public function getType(): string;

    public function getLat(): float;

    public function getLong(): float;

    public function toJson(): string;

    public function toArray(): array;

    public function setLocationMetadata(string $key, string $value);

    public function getLocationMetadata(string $key): ?string;
}
