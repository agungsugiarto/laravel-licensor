<?php

namespace Fluent\Licensor\Events;

use Fluent\Licensor\Models\Key;

/**
 * Class KeyActivated
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
