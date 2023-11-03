<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AppGarbageSavingsData;

class AppTrashCategory extends Model
{
    protected $connection = 'app_connection';
    protected $table = 'trash_categories';
    use HasFactory;

    protected $fillable = ['id', 'category_name', 'created_at', 'updated_at'];

    public function garbageSavingsData(){
        return $this->hasMany(AppGarbageSavingsData::class, 'trash_category_id', 'id' );
    }
}
