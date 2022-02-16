<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()   
    {
    return $this->hasMany('App\Post');  
    }
    public function getByCategory(int $limit_count = 5)
    {
     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    //$thisには選択されたCategoryのインスタンスが入っている。そのカテゴリーが持つ投稿を呼び出している。
    //今回は各投稿データからカテゴリー名を取得するから、with()を繋げている。
    }
}
