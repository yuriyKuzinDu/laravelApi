<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Service;

class Company extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
