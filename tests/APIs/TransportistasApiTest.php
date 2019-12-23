<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Transportistas;

class TransportistasApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_transportistas()
    {
        $transportistas = factory(Transportistas::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/transportistas', $transportistas
        );

        $this->assertApiResponse($transportistas);
    }

    /**
     * @test
     */
    public function test_read_transportistas()
    {
        $transportistas = factory(Transportistas::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/transportistas/'.$transportistas->id
        );

        $this->assertApiResponse($transportistas->toArray());
    }

    /**
     * @test
     */
    public function test_update_transportistas()
    {
        $transportistas = factory(Transportistas::class)->create();
        $editedTransportistas = factory(Transportistas::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/transportistas/'.$transportistas->id,
            $editedTransportistas
        );

        $this->assertApiResponse($editedTransportistas);
    }

    /**
     * @test
     */
    public function test_delete_transportistas()
    {
        $transportistas = factory(Transportistas::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/transportistas/'.$transportistas->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/transportistas/'.$transportistas->id
        );

        $this->response->assertStatus(404);
    }
}
