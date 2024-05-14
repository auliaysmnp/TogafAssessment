<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_user extends Model
{
    use HasFactory;
    protected $table = "mst_user";
    protected $guarded = ["id_user"];
}
