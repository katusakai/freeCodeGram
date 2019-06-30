<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
//    protected $fillable = [
//        'title', 'description', 'url', 'image'
//    ];

    protected $guarded = [];

    public function profileImage()
    {
        return $this->image ? '/storage/' . $this->image : 'https://dummyimage.com/200x200/fff/000000.jpg&text=No+image+uploaded';
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
