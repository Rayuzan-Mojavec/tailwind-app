<?php

namespace App\Models;

use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class People extends Model
{
    use HasFactory;

    public $table = "people";
    protected $fillable = [
        'ssn', 'namae', 'address', 'birth_date', 'gender', 'rerijyon'
    ];
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    public $casts = ['birth_date'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('namae', 'like', '%' . $search .  '%')
                    ->orWhere('ssn', 'like', '%' . $search .  '%');
            });
        });
    }

    public function date()
    {
        Date::setLocale('id');
        return Date::parse($this->attributes['birth_date'])->format('d F Y');
    }

    public function age()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }
}
