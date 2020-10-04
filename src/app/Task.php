<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{

    //タスクの実行状態と日本語、背景色
    const STATUS = [
        1 => [ 'label' => '未着手', 'class' => 'label-danger' ],
        2 => [ 'label' => '着手中', 'class' => 'label-info' ],
        3 => [ 'label' => '完了', 'class' => 'label-success' ],
    ];

    //タスク内容記入欄
    protected $fillable = [
        'title',
        'body',
        ];
    
    /**
     * 状態のラベル
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];
        
        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status]))
        {
            return '';
        }
        
        return self::STATUS[$status]['label'];
    }
    
      /**
     * 状態を表すHTMLクラス
     * @return string
     */
    public function getStatusClassAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];
        
        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status]))
        {
            return '';
        }
        
        return self::STATUS[$status]['class'];
    }
    
    //日付を取得し年月日で表示
    public function getFormattedDueDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['due_date'])->format('Y年m月d日');
    }
}
