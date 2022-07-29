<?php

namespace Fluent\Licensor\Events;

use Fluent\Licensor\Models\Key;

/**
 * Class KeyNotVerified
 * @package Fluent\Licensor\Events
 */
class KeyNotVerified
{
    /**
     * @var Key
     */
    public $key;

    /**
     * KeyNotVerified constructor.
     * @param Key $key
     */
    public function __construct(Key $key)
    {
        $this->key = $key;
    }

}
