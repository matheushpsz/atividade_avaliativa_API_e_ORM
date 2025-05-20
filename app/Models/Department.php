<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = [
        'name',
        'description',
        'location',
    ];
    
    public function employees() { 
        return $this->hasMany( 
        Employee::class, 
        'department_id',
        'id'
        ); 
    }
}
