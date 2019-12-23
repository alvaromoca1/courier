<?php namespace Tests\Repositories;

use App\Models\Envios;
use App\Repositories\EnviosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class EnviosRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var EnviosRepository
     */
    protected $enviosRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->enviosRepo = \App::make(EnviosRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_envios()
    {
        $envios = factory(Envios::class)->make()->toArray();

        $createdEnvios = $this->enviosRepo->create($envios);

        $createdEnvios = $createdEnvios->toArray();
        $this->assertArrayHasKey('id', $createdEnvios);
        $this->assertNotNull($createdEnvios['id'], 'Created Envios must have id specified');
        $this->assertNotNull(Envios::find($createdEnvios['id']), 'Envios with given id must be in DB');
        $this->assertModelData($envios, $createdEnvios);
    }

    /**
     * @test read
     */
    public function test_read_envios()
    {
        $envios = factory(Envios::class)->create();

        $dbEnvios = $this->enviosRepo->find($envios->id);

        $dbEnvios = $dbEnvios->toArray();
        $this->assertModelData($envios->toArray(), $dbEnvios);
    }

    /**
     * @test update
     */
    public function test_update_envios()
    {
        $envios = factory(Envios::class)->create();
        $fakeEnvios = factory(Envios::class)->make()->toArray();

        $updatedEnvios = $this->enviosRepo->update($fakeEnvios, $envios->id);

        $this->assertModelData($fakeEnvios, $updatedEnvios->toArray());
        $dbEnvios = $this->enviosRepo->find($envios->id);
        $this->assertModelData($fakeEnvios, $dbEnvios->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_envios()
    {
        $envios = factory(Envios::class)->create();

        $resp = $this->enviosRepo->delete($envios->id);

        $this->assertTrue($resp);
        $this->assertNull(Envios::find($envios->id), 'Envios should not exist in DB');
    }
}
