<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator\Migrations\Changes;

use Cycle\Migrations\Atomizer\Atomizer;

/**
 * @psalm-type TChange = array<ChangeType, string>
 */
interface CollectorInterface
{
    /**
     * @return list<TChange>
     */
    public function collect(Atomizer $atomizer): array;
}
