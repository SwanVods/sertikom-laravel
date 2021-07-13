<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Name extends Model
{
    use HasFactory;
    protected $table = 'name';

    public function get()
    {
        return DB::table('name')->get();
    }
}
