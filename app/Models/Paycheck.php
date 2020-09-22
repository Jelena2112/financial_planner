<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paycheck extends Model
{
    use HasFactory;
    protected $table = 'paychecks';

    protected $fillable = ['paycheck', 'user_id', 'currency'];
}
