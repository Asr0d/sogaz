<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_info';

    protected $fillable = [
        'user_id',
        'role',
        'level',
        'company',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function createUserInfo(User $user)
    {
        $userInfo = new UserInfo();
        $userInfo->user_id = $user->id;
        $userInfo->role = 'Администатор';
        $userInfo->level = 1;
        $userInfo->company_id = 1;
        $userInfo->save();
    }
}
