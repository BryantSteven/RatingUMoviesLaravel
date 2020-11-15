<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class Review extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = [
        'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
