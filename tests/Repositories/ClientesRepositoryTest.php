<?php namespace Tests\Repositories;

use App\Models\Clientes;
use App\Repositories\ClientesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ClientesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ClientesRepository
     */
    protected $clientesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->clientesRepo = \App::make(ClientesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_clientes()
    {
        $clientes = factory(Clientes::class)->make()->toArray();

        $createdClientes = $this->clientesRepo->create($clientes);

        $createdClientes = $createdClientes->toArray();
        $this->assertArrayHasKey('id', $createdClientes);
        $this->assertNotNull($createdClientes['id'], 'Created Clientes must have id specified');
        $this->assertNotNull(Clientes::find($createdClientes['id']), 'Clientes with given id must be in DB');
        $this->assertModelData($clientes, $createdClientes);
    }

    /**
     * @test read
     */
    public function test_read_clientes()
    {
        $clientes = factory(Clientes::class)->create();

        $dbClientes = $this->clientesRepo->find($clientes->id);

        $dbClientes = $dbClientes->toArray();
        $this->assertModelData($clientes->toArray(), $dbClientes);
    }

    /**
     * @test update
     */
    public function test_update_clientes()
    {
        $clientes = factory(Clientes::class)->create();
        $fakeClientes = factory(Clientes::class)->make()->toArray();

        $updatedClientes = $this->clientesRepo->update($fakeClientes, $clientes->id);

        $this->assertModelData($fakeClientes, $updatedClientes->toArray());
        $dbClientes = $this->clientesRepo->find($clientes->id);
        $this->assertModelData($fakeClientes, $dbClientes->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_clientes()
    {
        $clientes = factory(Clientes::class)->create();

        $resp = $this->clientesRepo->delete($clientes->id);

        $this->assertTrue($resp);
        $this->assertNull(Clientes::find($clientes->id), 'Clientes should not exist in DB');
    }
}
