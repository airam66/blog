<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }


    /**lo agregue yo
    public function testBasicExample(){


    	para crear un usuario

    	$user = factory(\App\User::class)->create([
    	'name'=>'Maria Tolaba',
        'email'=>'gim@gmail.com'
    	]);
    	$this->actingAs($user, 'api' );  con esto me aseguro que el usuario inicie sesion, le paso el usuer q quiero autenticar y el driver sobre el que quiero autenticar

             ->visit('api/user')
	         ->see('Maria Tolaba')
	         ->see('gim@gmail.com')
    }
    **/
}
