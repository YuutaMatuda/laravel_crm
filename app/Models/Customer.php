<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function scopeSearchCustomers($query,$input = null)
    {
        if (!empty($input)) {
            // クエリビルダを使用してデータを取得
            $customers = Customer::where('kana', 'like', $input . '%')
                ->orWhere('tel', 'like', $input . '%')
                ->exists();
    
            if ($customers) {
                // データベースに該当するレコードが存在する場合の処理
                return $query->where('kana', 'like', $input . '%')
                    ->orWhere('tel', 'like', $input . '%');
            }
        }
    
        // 何も返さない場合、クエリは変更されません
        return $query;
    }
}
