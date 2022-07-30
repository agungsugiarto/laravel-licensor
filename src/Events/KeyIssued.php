<?php

namespace Fluent\Licensor\Events;

use Fluent\Licensor\Models\Key;

/**
 * Class KeyIssued
 */
class KeyIssued
{
    /**
     * @var Key
     */
    public $key;

    /**
     * KeyIssued constructor.
     * @param Key $key
     */
    public function __construct(Key $key)
    {
        $this->key = $key;
    }
}
