<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class BasicTest extends TestCase
{
    private function defaultUser(){
        return User::find(1);
    }
 public function testLoadHomePage(){
        $this->get('/')->assertStatus(302);
    }
    public function testLoadCatalogPage(){
        $this->actingAs($this->defaultUser())->get('/catalog')->assertStatus(200)->assertSee('Catàleg');
    }
    public function testLoadCreatePage(){
        $this->actingAs($this->defaultUser())->get('/catalog/create')->assertStatus(200)->assertSee('Afegir pel.lícula');
    }
    public function testLoadEditPage(){
        $this->actingAs($this->defaultUser())->get('/catalog/edit/2')->assertStatus(200)->assertSee('Modificar pel.lícula');
    }
    public function testLoadShowPage(){
        $this->actingAs($this->defaultUser())->get('/catalog/show/2')->assertStatus(200)->assertSee('Editar Pel.lícula');
    }
}
