<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['languages'];

    public function category() {
      return $this->belongsTo(Category::class);
    }

    public function languages() {
        return $this->belongsToMany(Language::class);
    }
}
