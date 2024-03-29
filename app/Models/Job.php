<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Job extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function ShortWords()
    {
      return Str::words(strip_tags($this->description), 50);
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

      protected $casts = [
            'skills' => 'array',
            'responsibilities' => 'array',
            'expiration_date' => 'datetime',
        ];

    


}
