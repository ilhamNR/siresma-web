<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AppGarbageSavingsData;

class AppTransactionLog extends Model
{
    /**
     * @var array
     */
    protected $connection = 'app_connection';
    protected $table = 'transaction_logs';
    protected $fillable = ['code', 'type', 'user_id', 'garbage_savings_data_id', 'amount', 'trash_bank_id' , 'is_approved', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\AppUser');
    }

    public function garbageSavingsData()
    {
        return $this->belongsTo(AppGarbageSavingsData::class, 'garbage_savings_data_id');
    }
}
