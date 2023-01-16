<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Coffee extends Model
{
    use HasFactory;

    protected $fillables = [
        'title',
        'slug',
        'description',
        'description',
        'ingredients',
        'image',
    ];

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $exist = Coffee::where('slug', $slug)->first();

        while ($exist) {
            $slug = $original_slug . '-' . $c;
            $exist = Coffee::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
