<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator\Migrations;

use Cycle\Migrations\Atomizer\Atomizer;
use Cycle\Schema\Generator\Migrations\Changes\Collector;
use Cycle\Schema\Generator\Migrations\Changes\CollectorInterface;

final class ChangesCountGenerator implements NameGeneratorInterface
{
    public function generate(Atomizer $atomizer): string
    {
        $collector = new Collector();
        return \sprintf('changes_%d', $collector->collect($atomizer));
    }
}
