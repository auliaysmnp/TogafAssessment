<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_element extends Model
{
    use HasFactory;
    protected $table = "mst_element";
    protected $guarded = ["id_element"];
}
