<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contacts extends Model {

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];

    public function scopeOwner($query){
        $query->where('user_id','=',Auth::user()->id);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
