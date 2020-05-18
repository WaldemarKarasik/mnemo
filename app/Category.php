<?php

namespace App;
use App\Word;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function words() {
        return $this->hasMany(Word::class);
    }
}
