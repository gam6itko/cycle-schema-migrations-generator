<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator\Migrations\Changes;

enum ChangeType
{
    case Create;
    case Drop;
    case Rename;
    case Change;
    case Add;
    case Remove;
    case Alter;
    case AddIndex;
    case RemoveIndex;
    case AlterIndex;
    case AddFk;
    case RemoveFk;
    case AlterFk;
}
