<?php

namespace Http\Controllers;

use App\Http\Controllers\AuthController;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    public function testRegistration()
    {
        $request = $this->post(route('user.registration'), [
            'name' => 'User',
            'email' => 'example@mail.ru',
            'password' => 'NewPassword000',
        ]);
        $request->assertStatus(200);
    }

    public function testLogin()
    {
        $request = $this->post(route('user.login'), [
            'email' => 'example@mail.ru',
            'password' => 'NewPassword000',
        ]);
        $request->assertStatus(200);
    }
}
