<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    //protected $table= 'compaines';
    protected $fillable = ['name', 'address', 'email', 'website'];

    public function contacts(){
        return $this->hasMany(Contact::class);
    }
}
