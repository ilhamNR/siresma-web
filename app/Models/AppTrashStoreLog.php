<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppTrashStoreLog extends Model
{
    protected $connection = 'app_connection';
    protected $table = 'trash_store_logs';
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'store_date', 'trash_category', 'address', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\AppUser');
    }
}
