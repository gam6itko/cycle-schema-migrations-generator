<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator\Migrations;

use Cycle\Migrations\Atomizer\Atomizer;

final class NameBasedOnChangesMd5Generator implements NameGeneratorInterface
{
    public function __construct(
        private readonly NameBasedOnChangesGenerator $inner
    )
    {
    }

    public function generate(Atomizer $atomizer): string
    {
        return md5($this->inner->generate($atomizer));
    }
}
