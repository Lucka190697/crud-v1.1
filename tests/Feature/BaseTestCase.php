<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class BasicTest extends TestCase
{
	private $user;
	public function setUp()
	{
		parent::setUp();
		$this->user = factory(User::class)->create();
	}
	/** @test */

	public function UrlIndex()
	{
		$response = $this->get('/');
		$response->assertStatus(200);
	}
	/** @test */
	public function RedirectLoginUnauthenticated()
	{
		$this->get(route('users.index'))
		->assertStatus(302)
		->assertRedirect(route('login'));
	}
	/** @test */
	public function ErrorInvalidUser()
	{
		$user = [
			'email' => 'orange@unexist.com.br',
			'password' => '123456',
		];
		$this->assertInvalidCredentials($user);
		$userWithoutEmail = [
			'email' => '',
			'password' => '123456',
		];
		$this->assertInvalidCredentials($userWithoutEmail);
		$userWithoutPassword = [
			'email' => 'email@unexist.com.br',
			'password' => '',
		];
		$this->assertInvalidCredentials($userWithoutPassword);
		$this->assertGuest();
	}
	/** @test */
	public function authenticateUserCredentials()
	{
		$credentials = [
			'email' => $this->user['email'],
			'password' => 'secret',
		];
		$this->assertCredentials($credentials);
		$response = $this->call('POST', '/login', [
			'email' => $credentials['email'],
			'password' => $credentials['password'],
			'_token' => csrf_token()
		]);
		$this->assertAuthenticated();
	}
	/** @test */
	public function redirectLoginLogout()
	{
		$credentials = [
			'email' => $this->user['email'],
			'password' => 'secret',
		];
		$response = $this->call('POST', '/login', [
			'email' => $credentials['email'],
			'password' => $credentials['password'],
			'_token' => csrf_token()
		]);
		$this->call('POST', route('logout'), ['_token' => csrf_token()])
		->assertRedirect('/');
		$this->assertGuest();

		if(env('APP_ENV') === 'laraveltesting') {
			return true;
		}
	}
}