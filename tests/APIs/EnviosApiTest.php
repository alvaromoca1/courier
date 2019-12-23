<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Envios;

class EnviosApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_envios()
    {
        $envios = factory(Envios::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/envios', $envios
        );

        $this->assertApiResponse($envios);
    }

    /**
     * @test
     */
    public function test_read_envios()
    {
        $envios = factory(Envios::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/envios/'.$envios->id
        );

        $this->assertApiResponse($envios->toArray());
    }

    /**
     * @test
     */
    public function test_update_envios()
    {
        $envios = factory(Envios::class)->create();
        $editedEnvios = factory(Envios::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/envios/'.$envios->id,
            $editedEnvios
        );

        $this->assertApiResponse($editedEnvios);
    }

    /**
     * @test
     */
    public function test_delete_envios()
    {
        $envios = factory(Envios::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/envios/'.$envios->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/envios/'.$envios->id
        );

        $this->response->assertStatus(404);
    }
}
