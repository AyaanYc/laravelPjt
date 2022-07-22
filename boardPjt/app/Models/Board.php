<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // protected $table = '바꾸고 싶은 테이블명';
    // protected $primarykey = 'i_board'; 바꾸고 싶은 pk
    protected $fillable = ['title', 'ctnt', 'hits'];
    protected $guarded = ['created_at'];//한번입력되고나면 수정이 안됬으면 좋겠으면 배열안에 컬럼명 수동으로 들어가서 바꿀수는있음
}
