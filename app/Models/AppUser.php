<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AppUser extends Model
{
    use HasFactory;
    protected $connection = 'app_connection';
    protected $table = 'users';
    use  HasFactory, Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['trash_bank_id', 'username', 'profile_picture', 'full_name', 'email', 'address', 'is_verified', "role", 'no_kk', 'phone', 'password', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trashStoreLogs()
    {
        return $this->hasMany('App\Models\TrashStoreLog');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trashBank()
    {
        return $this->belongsTo('App\Models\TrashBank');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function savingsBalances()
    {
        return $this->hasMany('App\Models\SavingsBalanceData');
    }
    protected $hidden = [
        'password'
    ];
    public function authorizeRoles($roles)
    {
      if ($this->hasAnyRole($roles)) {
        return true;
      }
      abort(401, 'This action is unauthorized.');
    }

    public function hasAnyRole($roles)
    {
      if (is_array($roles)) {
        foreach ($roles as $role) {
          if ($this->hasRole($role)) {
            return true;
          }
        }
      } else {
        if ($this->hasRole($roles)) {
          return true;
        }
      }
      return false;
    }

    public function hasRole($role)
    {
      if ($this->role == $role) {
        return true;
      }
      return false;
    }
}
