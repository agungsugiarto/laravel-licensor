<?php

namespace Fluent\Licensor\Models;

use Spatie\Sluggable\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Fluent\Licensor\Traits\HasStatusAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\SlugOptions;

/**
 * Class Feature
 *
 * @property string $id
 * @property bool $status
 * @property string $title
 * @property string $text
 */
class Feature extends Model
{
    use HasFactory, HasSlug, HasStatusAttribute;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'id',
        'status',
        'title',
        'slug',
        'text',
    ];

    /**
     * The attributes that should be cast.
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * {@inheritdoc}
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
