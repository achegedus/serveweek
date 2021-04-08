<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function workdate()
    {
        return $this->belongsTo(ProjectDate::class, 'project_date_id', 'id');
    }

    public function formattedID()
    {
        return '2021-' . str_pad( $this->id,3,"0",STR_PAD_LEFT);
    }

    public function status()
    {
        if (!$this->is_approved && !$this->is_evaluated && !$this->is_confirmed)
            return 'NEW';
        else if ($this->is_approved && !$this->is_evaluated && !$this->is_confirmed)
            return 'APPROVED';
        else if ($this->is_approved && $this->is_evaluated && !$this->is_confirmed)
            return 'EVALUATED';
        else if ($this->is_approved && $this->is_evaluated && $this->is_confirmed)
            return 'CONFIRMED';
        else if ($this->is_confirmed)
            return 'CONFIRMED';
    }
}
