<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Faker\Generator as Faker;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;




class UserTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp()
	{
		parent::setUp();
		// Create The fake Disk
		Storage::fake('avatars');
  }

	public function testDatabase()
	{
    // Make call to application...

    $this->assertDatabaseHas('users', [
        'email' => 'canarionegro2@gmail.com'
    ]);
}



	public function test_user_can_view_a_login_form()//se o usuario tem acesso ao form de login
	{
		$response = $this->get('/login');
		$response->assertSuccessful();
		$response->assertViewIs('auth.login');
	}

	public function test_user_can_register()//se o usuario pode se registrar
	{
		$response = $this->get('/register');
		$response->assertSuccessful();
		$response->assertViewIs('auth.register');
	}

	public function test_user_can_view_a_welcome_form()//se o usuario tem acesso a 1a pagina
	{
		$response = $this->get('/');
		$response->assertSuccessful();
		$response->assertViewIs('welcome');
	}

	public function test_user_cannot_view_a_login_form_when_authenticated()//se o usuario tem acesso a home
	{
		$user = factory(User::class)->make();
		$response = $this->actingAs($user)->get('/login');
		$response->assertRedirect('/home');
  }

	public function test_user_can_wiew_create_user()//se o usuario pode registrar outros usuarios
	{
		$response = $this->get('/users/create');
		$response->assertSuccessful();
		$response->assertViewIs('users.create');
	}


	public function must_be_authenticated_to_update_profile()
    {
        $this->createUserInTenant();
        $this->update(['name' => 'new name', 'email' => 'new email'])->assertRedirect('/login');
    }

    public function user_information_is_udpated_in_database()
    {
        $user = $this->createUserInTenant();
        $this->signIn($user);
        $this->update(['name' => 'new name', 'email' => 'new email']);
        $this->assertDatabaseHas('users', ['name' => 'new name', 'email' => 'new email']);
    }

		public function shouldCreateWhenCorrectData()//comentar
        {
            $new_user_form_data = factory(User::class)->make()->toArray();
            $new_user_form_data['password'] = 'secret';
            $new_user_form_data['password_confirmation'] = 'secret';
            $new_user_form_data['_token'] = csrf_token();
            $this->call('POST', route('users.store'), $new_user_form_data)
            ->assertRedirect()
            ->assertSessionHas('success');
        }

        public function authenticateUserCredentials()
        {
           $credentials = [
              'email' => $this->user['email'],
              'password' => '',
          ];
          $this->assertCredentials($credentials);
          $response = $this->call('POST', '/login', [
              'email' => $credentials['email'],
              'password' => $credentials['password'],
              '_token' => csrf_token()
          ]);
          $this->assertAuthenticated();
      }



      public function shouldntCreateWhenMissingData()
      {
        $new_user_form_data = factory(User::class)->make()->toArray();
        $new_user_form_data['email'] = '';
        $new_user_form_data['name'] = '';
        $new_user_form_data['password'] = '';
        $new_user_form_data['city'] = '';
        $new_user_form_data['number'] = '';
        $new_user_form_data['Postal Code'] = '';
        $new_user_form_data['State'] = '';
        $new_user_form_data['District'] = '';

        $new_user_form_data['_token'] = csrf_token();
        $this->call('POST', route('users.store'), $new_user_form_data)
        ->assertSessionHasErrors('email')
        ->assertSessionHasErrors('name')
        ->assertSessionHasErrors('password')
        ->assertSessionHasErrors('city');
    }

/*

    public function testAvatarUpload()
    {
			Storage::disk('local')->assertExists('avatars.jpg');
			$file=Storage::fake('avatars'); // '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg'


			$file = UploadedFile::image('avatars.jpg');// da erro de xamada na funcao
			$image = Image::fromForm($file);  // Store the image and set image_path;
      $image->product_id = 1;
      $image->save();

      $response = $this->json('POST', '/avatar', [
      	'avatar' => $file,
        ]);

        // Assert the file was stored...
        Storage::disk('avatars')->assertExists($file->hashName());

        // Assert a file does not exist...
        Storage::disk('avatars')->assertMissing('missing.jpg');
    }*/



}
