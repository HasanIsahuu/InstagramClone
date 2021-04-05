<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileImage()
    {
        $imagePath=($this->image) ? $this->image : 'profile/rTyO46ujccU510LjgV1hVHJS79UFo9SzR40IuSpP.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
