<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator\Migrations\Changes;

enum ChangeType: string
{
    case Create = 'create_';
    case Drop = 'drop_';
    case Rename = 'rename_';
    case Change = 'change_';
    case Add = 'add_';
    case Rm = 'rm_';
    case Alter = 'alter_';
    case AddIndex = 'add_index_';
    case RmIndex = 'rm_index_';
    case AlterIndex = 'alter_index_';
    case AddFk = 'add_fk_';
    case RmFk = 'rm_fk_';
    case AlterFk = 'alter_fk_';
}
