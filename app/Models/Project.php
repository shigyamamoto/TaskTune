<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'key', 'enabled'
    ];

    protected $casts = [
        'enabled' => 'bool',
    ];

    /**
     * 有効なプロジェクトをすべて取得する
     * @param Builder $query
     * @return mixed
     */
    public function scopeEnabled(Builder $query)
    {
        return $query->where('enabled', true);
    }

    /**
     * キー名で取得する
     * @param Builder $query
     * @return mixed
     */
    public function scopeKey(Builder $query, $key)
    {
        return $query->enabled()->where('key', $key);
    }


}
