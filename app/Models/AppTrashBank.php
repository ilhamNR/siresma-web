<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer $id
 * @property string $name
 * @property string $shipment_date
 * @property string $created_at
 * @property string $updated_at
 * @property User[] $users
 */
class AppTrashBank extends Model
{
    /**
     * @var array
     */
    protected $connection = 'app_connection';
    protected $table = 'trash_banks';
    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\AppUser', 'trash_bank_id', 'id');
    }
}
