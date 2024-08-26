<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'posts'; // $table // deskripsi binding nama model pada nama table
    protected $primaryKey = 'id'; // $primaryKey // deskripsi binding nama column primarykey pada table
    protected $keyType = 'int'; // $keyType // deskripsi type data nama column primarykey
    public $incrementing = true; // $incrementing // deskripsi jika id type int / bigInt maka yang akan autoincrement pada table. default model laravel adalah true
    public $timestamps = true; // $timestamps adalah fitur laravel akan auto generate auto_create dan auto_update // default model laravel adalah true

    protected $guarded = [];

    // many to 1 (banyak post di miliki oleh satu user)
    // belongsTo() balikan dari hasOne, HasMany
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
