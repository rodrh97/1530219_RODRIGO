<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModule extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //Prueba 1: Revisar que funcione correcatamente la url /usuarios
    //Y de ser asi que muestre un estatus 200
    function test_si_carga_url_de_usuarios()
    {
        $this->get('/usr/nuevo')
        //Si esto carga correctamente muestra el estatus 200
        ->assertStatus(200)
        //si esta correcta la prueba se debe mostrar el texto
        //"Creando nuevo usuario" ya que es el que esta en el URL
        //usr/nuevo
        ->assertSee('Creando nuevo usuario');
    }
}
