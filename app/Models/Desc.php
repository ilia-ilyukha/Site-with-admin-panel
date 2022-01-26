<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DescList;

class Desc extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function lists(){
        return $this->hasMany(DescList::class);
    }
}
