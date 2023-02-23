<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * Generate a slug
     *
     * @return void
     */
    public static function bootHasSlug()
    {
        static::creating(function (self $model) {
            foreach ($model->slugConfigs() as $column => $target) {
                if (empty($model->{$column})) {
                    $model->{$column} = $model->newSlug($target);
                }
            }
        });
    }


    /**
     * Generate new slug
     *
     * @param  mixed $target
     * @return string
     */
    public function newSlug($target): string
    {
        $slug = Str::slug($this->{$target});
        return sprintf("%s-%s", $slug, Str::random(5));
    }

    /**
     * Get target slug
     *
     * @return array
     */
    public function slugConfigs(): array
    {
        return [];
    }
}