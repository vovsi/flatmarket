<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyContact extends Model
{
    /** @var string[]  */
    protected $fillable = ['phone', 'email', 'address', 'time_work'];

    /** @var bool  */
    public $timestamps = false;
}
