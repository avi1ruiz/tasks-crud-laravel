<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = ['title', 'description', 'state', 'limit'];
    protected $dates = ['limit'];

    /*
     * Take the state value in row, and return string with state
     *
     *
     */
    public function state()
    {
        return $this->state == 0 ? "No finalizada" : "Finalizada";
    }
}
