<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = ['name', 'email'];

    protected $hidden =   ['id'];



    public function userAll(){
        return Users::all();
    }

    public function userID($id){
        return Users::find($id);
    }

    public function updateUser(){
    }

    public function editUser(){
    }


}
