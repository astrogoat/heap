<?php

namespace Astrogoat\Heap\Actions;

use Helix\Lego\Apps\Actions\Action;

class HeapAction extends Action
{
    public static function actionName(): string
    {
        return 'Heap action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
