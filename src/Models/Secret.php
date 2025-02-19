<?php

namespace Fluent\Licensor\Models;

use Fluent\Licensor\Traits\HasStatusAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Secret
 *
 * @property string $id
 * @property bool $status
 */
class Secret extends Model
{
    use HasFactory, HasStatusAttribute;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var string
     */
    protected $keyType = 'string';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * Enable the secret
     * @return bool
     */
    public function enable()
    {
        return $this->update(['status' => true]);
    }

    /**
     * Disable the secret
     * @return bool
     */
    public function disable()
    {
        return $this->update(['status' => false]);
    }
}
