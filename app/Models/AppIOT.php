<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AppGarbageSavingsData;

class AppIOT extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $connection = 'app_connection';
    protected $table = 'iots';

    /**
     * @var array
     */
    protected $fillable = ['garbage_savings_data_id','code', 'weight', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trashData()
    {
        // return $this->belongsTo(AppGarbageSavingsData::class, 'iot_id');
        return $this->hasOne(AppGarbageSavingsData::class, 'iot_id', 'id');
    }

}
