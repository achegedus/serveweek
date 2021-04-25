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

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
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

    public function truncated_address($limit, $break=" ", $pad="...")
    {
        $string = $this->location_address;

        // return with no change if string is shorter than $limit
        if(strlen($string) <= $limit) return $string;

        // is $break present between $limit and the end of the string?
        if(false !== ($breakpoint = strpos($string, $break, $limit))) {
            if($breakpoint < strlen($string) - 1) {
                $string = substr($string, 0, $breakpoint) . $pad;
            }
        }

        return $string;
    }

    public function truncated_description($limit, $break=".", $pad="...")
    {
        $string = $this->project_description;

        // return with no change if string is shorter than $limit
        if(strlen($string) <= $limit) return $string;

        // is $break present between $limit and the end of the string?
        if(false !== ($breakpoint = strpos($string, $break, $limit))) {
            if($breakpoint < strlen($string) - 1) {
                $string = substr($string, 0, $breakpoint) . $pad;
            }
        }

        return $string;
    }

    public function category_list()
    {
        $output = '';

        foreach ($this->categories as $category) {
            $output = $output . ', ' . $category->name;
        }

        $output = substr($output, 2);
        return $output;
    }

    public function updateVolunteerCount()
    {
        $this->isFilled = false;
        $count = 0;
        foreach ($this->volunteers as $vol) {
            $count = $count + $vol->numberOfVolunteers;
        }
        $this->registeredVolunteers = $count;

        if ($this->registeredVolunteers >= $this->volunteers_needed) {
            $this->isFilled = true;
        }
        $this->save();
    }

    public function availableSlots()
    {
        if ($this->volunteers_needed <= $this->registeredVolunteers)
            return 'Project filled.';
        else
            return $this->volunteers_needed - $this->registeredVolunteers . ' of ' . $this->volunteers_needed;
    }
}
