<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator\Migrations;

use Cycle\Database\Schema\AbstractTable;
use Cycle\Migrations\Atomizer\Atomizer;
use Cycle\Schema\Generator\Migrations\Changes\Collector;
use Cycle\Schema\Generator\Migrations\Changes\CollectorInterface;

final class NameBasedOnChangesGenerator implements NameGeneratorInterface
{
    public function __construct(
        private readonly CollectorInterface $collector = new Collector(),
    ) { }

    public function generate(Atomizer $atomizer): string
    {
        $this->collector-

        return \implode('_', $name);
    }
}
