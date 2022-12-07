<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('sx20SX20');
        $user->save();

        $user2 = new User();
        $user2->name = 'student-manager';
        $user2->email = 'studentmanager@gmail.com';
        $user2->password = Hash::make('sx20SX20');
        $user2->save();

        $user3 = new User();
        $user3->name = 'course-manager';
        $user3->email = 'coursemanager@gmail.com';
        $user3->password = Hash::make('sx20SX20');
        $user3->save();

        $user4 = new User();
        $user4->name = 'teacher-manager';
        $user4->email = 'teachermanager@gmail.com';
        $user4->password = Hash::make('sx20SX20');
        $user4->save();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
