<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public $table = "people";
    protected $primaryKey = 'ssn';
    protected $fillable = [
        'ssn', 'namae', 'address', 'birth_date'
    ];
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
}
