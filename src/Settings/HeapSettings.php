<?php

namespace Astrogoat\Heap\Settings;

use Astrogoat\Heap\Actions\HeapAction;
use Helix\Lego\Settings\AppSettings;

class HeapSettings extends AppSettings
{
    public string $app_id;

    protected array $rules = [
        'app_id' => ['required'],
    ];

    public function description(): string
    {
        return 'Interact with Heap.';
    }
}
