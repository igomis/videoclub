<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    public function testLoadHomePage(){
        $this->get('/')->assertStatus(200)->assertSee('Pantalla principal');
    }
    public function testLoadCatalogPage(){
        $this->get('/catalog')->assertStatus(200)->assertSee('Catalogo');
    }
    public function testLoadCreatePage(){
        $this->get('/catalog/create')->assertStatus(200)->assertSee('Crear pel.licula');
    }
    public function testLoadEditPage(){
        $this->get('/catalog/edit/2')->assertStatus(200)->assertSee('Editar pel.licula id 2');
    }
    public function testLoadShowPage(){
        $this->get('/catalog/show/2')->assertStatus(200)->assertSee('Mostrar pel.licula id 2');
    }
}
