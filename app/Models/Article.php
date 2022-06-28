<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function getImage($image){
        $image = file_exists($_SERVER['DOCUMENT_ROOT'] . '/public/images/blog/' . $image) ? $image : 'no_image.png';

        return '/public/images/blog/' . $image;
    }
}
