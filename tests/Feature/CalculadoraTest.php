<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Controllers\CalculadoraController;

class CalculadoraTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_suma(){
        $var1 = 1;
        $var2 = 2;
        $instancia = new CalculadoraController;
        $resultado = $instancia->suma($var1, $var2);
        $res_esp = 3;
        $this->assertSame($resultado, $res_esp);
    
    }
    public function test_resta(){
        $var1 = 1;
        $var2 = 2;
        $instancia = new CalculadoraController;
        $resultado = $instancia->resta($var1, $var2);
        $res_esp = 4;
        $this->assertSame($resultado, $res_esp);
    
    }
    public function test_multiplicacion(){
        $var1 = 1;
        $var2 = 2;
        $instancia = new CalculadoraController;
        $resultado = $instancia->multiplicacion($var1, $var2);
        $res_esp = 4;
        $this->assertSame($resultado, $res_esp);
    
    }
    public function test_division(){
        $var1 = 1;
        $var2 = 2;
        $instancia = new CalculadoraController;
        $resultado = $instancia->division($var1, $var2);
        $res_esp = 4;
        $this->assertSame($resultado, $res_esp);
    
    }
}
