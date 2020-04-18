<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Company;

class Service extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
