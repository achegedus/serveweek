<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ProjectDate extends Model
{
    use HasFactory;

//    protected $dates = ['project_date'];
//    protected $dateFormat = 'm-d-Y';

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_date_id', 'id');
    }

    public function formattedDate()
    {
        $createdAt = Carbon::parse($this->project_date);
        return  $createdAt->format('D, M d, Y');
    }
}
