<?php

namespace Astrogoat\Heap\Settings;

use Astrogoat\Heap\Actions\HeapAction;
use Helix\Lego\Settings\AppSettings;

class HeapSettings extends AppSettings
{
    public string $app_id;
    // public string $access_token;

    protected array $rules = [
        'app_id' => ['required'],
        // 'access_token' => ['required'],
    ];

    protected static array $actions = [
        // HeapAction::class,
    ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Heap.';
    }
}
