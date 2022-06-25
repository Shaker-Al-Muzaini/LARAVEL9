<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed $name
 * @property mixed $Brith_Date
 * @property mixed $Nationality
 * @method static where(string $string, $id)
 * @method static select(string $string)
 */
class studend extends Model
{
    protected $table='studend';
    use HasFactory;
   // use SoftDeletes;
    use SoftDeletes;


}
