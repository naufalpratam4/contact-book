<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['user_id', 'nama_kontak', 'no', 'email', 'job', 'img','description'];
    protected $table = 'contacts';
}
