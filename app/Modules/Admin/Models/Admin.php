<?php

namespace Admin\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'phone', 'password', 'privileges', 'deleted_at'
    ];
    protected $table = 'admins';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin()
    {
        return $this->belongsTo('Admin\Models\Admin', 'deleted_by');
    }
}
