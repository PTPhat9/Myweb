<?php

namespace Myweb\Modules\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    use HasFactory;

    protected $table = 'product_capacity';
    protected $primaryKey = 'id';
}
