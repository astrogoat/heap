<?php

namespace Astrogoat\Heap\Commands;

use Illuminate\Console\Command;

class HeapCommand extends Command
{
    public $signature = 'heap';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
