<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perangkat extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
