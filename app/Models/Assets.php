<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;

    protected $guarded =['id']; //semua field bisa di isi nilai nya kecuali yang ada di guarded => id
}
