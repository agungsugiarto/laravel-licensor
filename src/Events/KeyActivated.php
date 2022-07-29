<?php

namespace Fluent\Licensor\Events;

use Fluent\Licensor\Models\Key;

/**
 * Class KeyActivated
 * @package Fluent\Licensor\Events
 */
class KeyActivated
{
    /**
     * @var Key
     */
    public $key;

    /**
     * KeyActivated constructor.
     * @param Key $key
     */
    public function __construct(Key $key)
    {
        $this->key = $key;
    }

}
