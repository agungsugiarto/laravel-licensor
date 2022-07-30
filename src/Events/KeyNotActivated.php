<?php

namespace Fluent\Licensor\Events;

use Fluent\Licensor\Models\Key;

/**
 * Class KeyNotActivated
 */
class KeyNotActivated
{
    /**
     * @var Key
     */
    public $key;

    /**
     * KeyNotActivated constructor.
     * @param Key $key
     */
    public function __construct(Key $key)
    {
        $this->key = $key;
    }
}
