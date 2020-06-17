<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors(){
        return $this->belongsTo(Author::class,'author_id','id');
    }
    public function publications(){
        return $this->belongsTo(Publication::class,'publication_id','id');
    }
    public function cariculams(){
        return $this->belongsTo(Cariculam::class,'cariculam_id','id');
    }
    public function departments(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function semesters(){
        return $this->belongsTo(Semester::class,'semester_id','id');
    }
    public function createdUser(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function updatedUser(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
