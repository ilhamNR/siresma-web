<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AppTrashCategory;
use App\Models\AppTrashBank;
use App\Models\AppTransactionLog;

use App\Models\AppIOT;

class AppGarbageSavingsData extends Model
{
    /**
     * @var array
     */
    protected $connection = 'app_connection';
    protected $table = 'garbage_savings_datas';

    protected $fillable = ['user_id', 'status', 'user_balance', 'admin_balance', 'trash_bank_id', 'trash_category_id', 'weight', 'iot_id', 'store_date', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\AppUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iot()
    {
        return $this->hasOne(AppIOT::class, 'id', 'iot_id');
    }
    public function trashCategory()
    {
        return $this->hasOne(AppTrashCategory::class, 'id', 'trash_category_id');
    }
    public function trashBank()
    {
        return $this->belongsTo(AppTrashBank::class);
    }
    public function transactionLog()
    {
        return $this->hasOne(AppTransactionLog::class);
    }
}
