<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = 'bui Phuong anh';
        $user->user_name = 'bpabpa';
        $user->email = 'bpa@gmail.com';
        $user->password = Hash::make('123456'); // Đảm bảo mã hóa mật khẩu
        $user->phone = '1234567890';
        $user->avatar = 'path/to/avatar.jpg';
        $user->address = 'Hai Dương';
        $user->roles = 2; // Thay đổi thành 'admin' nếu cần tạo một admin
        $user->gender = 0;
        
        $user->save();
    }
}
