<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mime_type',
        'filename',
        'path',
        'extension',
        'user_id',
        'student_id',
    ];

    public function getPathAttribute()
    {
        if (!is_null($this->attributes['path'])) {
            return asset('/storage/uploads/thumb/' . $this->filename) ?? asset('images/default/default-image.svg');
        } else {
            return asset('images/default/property-image.svg');
        }
    }
    // public function largeurl(){
    //     return asset('/storage/uploads/'.$this->filename)??asset('images/default/default-image.svg');
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
