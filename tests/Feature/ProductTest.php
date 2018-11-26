<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Product;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;

use Illuminate\Foundation\Testing\DatabaseMigrations;

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{

    public function testExample()
    {
    	$this->assertTrue(true);
    }

    public function validate()//comentar esse
    {
    	$usuario = factory(Product\User::class)->create();
        $this->actingAs($usuario)
        ->visit(action('Produto@novo'))
        ->press('Salvar')
        ->seePageIs(action('Produto@novo'));
    }

    public function test_user_can_view_create_product()
  	{
  		$response = $this->get('/products/create');
  		$response->assertSuccessful();
  		$response->assertViewIs('products.create');
  	}
}
