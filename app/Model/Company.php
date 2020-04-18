<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Service;

class Company extends Model
{
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
