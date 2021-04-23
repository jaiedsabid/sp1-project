<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract,CanResetPasswordContract,AuthorizableContract
{
    use HasFactory;
    use Authenticatable;
    use CanResetPassword;
    use Authorizable;

    protected $table = 'users';
    public $timestamps = true;

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function prescription()
    {
        return $this->hasMany(Prescription::class);
    }
}
