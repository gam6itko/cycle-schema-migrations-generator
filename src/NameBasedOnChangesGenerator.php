<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator\Migrations;

use Cycle\Migrations\Atomizer\Atomizer;
use Cycle\Schema\Generator\Migrations\Changes\ChangeType;
use Cycle\Schema\Generator\Migrations\Changes\Collector;
use Cycle\Schema\Generator\Migrations\Changes\CollectorInterface;

final class NameBasedOnChangesGenerator implements NameGeneratorInterface
{
    public function generate(Atomizer $atomizer): string
    {
        $collector = new Collector();
        return \implode(
            '_',
            \array_map(
                fn(array $pair) => $this->changeToString($pair[0], $pair[1]),
                $collector->collect($atomizer),
            )
        );
    }

    private function changeToString(ChangeType $change, string $name): string
    {
        return sprintf(
            '%s_%s',
            match ($change) {
                ChangeType::Create => 'create',
                ChangeType::Drop => 'drop',
                ChangeType::Rename => 'rename',
                ChangeType::Change => 'change',
                ChangeType::Add => 'add',
                ChangeType::Remove => 'rm',
                ChangeType::Alter => 'alter',
                ChangeType::AddIndex => 'add_index',
                ChangeType::RemoveIndex => 'rm_index',
                ChangeType::AlterIndex => 'alter_index',
                ChangeType::AddFk => 'add_fk',
                ChangeType::RemoveFk => 'rm_fk',
                ChangeType::AlterFk => 'alter_fk',
            },
            $name,
        );
    }
}
