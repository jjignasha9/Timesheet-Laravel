<?php

namespace App\Models;

use App\Models\Workday;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $guarded  = [];


    public function workdays()
    {
        return $this->hasMany(Workday::class, 'timesheet_id', 'id');
    }
}