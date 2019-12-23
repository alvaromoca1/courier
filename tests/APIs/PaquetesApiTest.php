<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Paquetes;

class PaquetesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_paquetes()
    {
        $paquetes = factory(Paquetes::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/paquetes', $paquetes
        );

        $this->assertApiResponse($paquetes);
    }

    /**
     * @test
     */
    public function test_read_paquetes()
    {
        $paquetes = factory(Paquetes::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/paquetes/'.$paquetes->id
        );

        $this->assertApiResponse($paquetes->toArray());
    }

    /**
     * @test
     */
    public function test_update_paquetes()
    {
        $paquetes = factory(Paquetes::class)->create();
        $editedPaquetes = factory(Paquetes::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/paquetes/'.$paquetes->id,
            $editedPaquetes
        );

        $this->assertApiResponse($editedPaquetes);
    }

    /**
     * @test
     */
    public function test_delete_paquetes()
    {
        $paquetes = factory(Paquetes::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/paquetes/'.$paquetes->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/paquetes/'.$paquetes->id
        );

        $this->response->assertStatus(404);
    }
}
