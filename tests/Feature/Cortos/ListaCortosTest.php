<?php

namespace Tests\Feature\Cortos;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Cortos;//

class ListaCortosTest extends TestCase
{
    use RefreshDatabase; //

    public function test_puede_buscar_un_solo_corto()//:void// que sellame test
    {
        $this->withoutExceptionHandling();
        $corto = Cortos::factory()->create();//
        $response = $this->getJson('/api/cortos/'.$corto->getRouteKey());//
        $response->assertSee($corto->corto_nombre);//
    }
}
