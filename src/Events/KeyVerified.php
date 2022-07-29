<?php

namespace Fluent\Licensor\Events;

use Fluent\Licensor\Models\Key;

/**
 * Class KeyVerified
 * @package Fluent\Licensor\Events
 */
class KeyVerified
{
    /**
     * @var Key
     */
    public $key;

    /**
     * KeyVerified constructor.
     * @param Key $key
     */
    public function __construct(Key $key)
    {
        $this->key = $key;
    }

}
