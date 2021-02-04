<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'point', 'enabled', 'start_date', 'end_date'
    ];

    protected $casts = [
        'enabled' => 'bool',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    /**
     * 有効なバージョンをすべて取得する
     * @param Builder $query
     * @return mixed
     */
    public function scopeEnabled(Builder $query)
    {
        return $query->where('enabled', true);
    }

    /**
     * スプリントを取得
     * @param Builder $query
     * @return mixed
     */
    public function scopeSprint(Builder $query, $key)
    {
        return $query->enabled()->where('type', 1)->get();
    }

    /**
     * バックログを取得
     * @param Builder $query
     * @return mixed
     */
    public function scopeBacklog(Builder $query)
    {
        return $query->enabled()->where('type', 0)->first();
    }

    /**
     * スプリント開始日を取得
     * @return mixed
     */
    public function getStartDateFormatAttribute()
    {
        return $this->start_date->format('Y/m/d');
    }

    /**
     * スプリント終了日を取得
     * @return mixed
     */
    public function getEndDateFormatAttribute()
    {
        return $this->end_date->format('Y/m/d');
    }

}
