<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public function setBoolean($value)
    {
        if ($value)
            $this->value = '1';
        else
            $this->value = '0';
    }

    public function getBoolean()
    {
        if ($this->value === '1')
            return true;
        else
            return false;
    }
}
