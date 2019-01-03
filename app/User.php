<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'apellidos','nombres', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){

        return $this->belongsTo( 'App\Role' ); 
    
    }

    public function admin()
    {
        $roles = $this->roles()->get();
        $is_admin = 0;
        foreach ($roles as $rol) {
            if($rol->id === 1){
                $is_admin++;
            }
        }
        
        if($is_admin > 0){
            return true;    
        }else{
            //return true;
            return false;
        }
        

        //var_dump($roles);
        

    }
}
