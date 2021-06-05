<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class AddDemoUserToUsersTable extends Migration
{
    public function up(): void
    {
        $user = new User();
        $user->name = 'Demo User';
        $user->email = 'demo@mailinator.com';
        $user->password = Hash::make(('demo');
        $user->api_token = '12345';
        $user->save();
    }

    public function down(): void
    {
        // noting to do
    }
}
