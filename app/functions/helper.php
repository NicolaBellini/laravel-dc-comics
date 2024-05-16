<?php

namespace App\Functions;

use Illuminate\Support\Str;

class Helper
{
    public static function getSlug($string, $model)
    {
        $slug = Str::slug($string);

        // Verifica se lo slug esiste già nel database
        $count = $model::where('slug', $slug)->count();

        if ($count > 0) {
            // Se esiste già uno slug con lo stesso nome, aggiungi un numero incrementale al termine dello slug
            $i = 1;
            while ($model::where('slug', $slug . '-' . $i)->count() > 0) {
                $i++;
            }
            $slug .= '-' . $i;
        }

        return $slug;
    }
}
