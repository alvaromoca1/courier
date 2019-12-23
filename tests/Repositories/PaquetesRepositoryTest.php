<?php namespace Tests\Repositories;

use App\Models\Paquetes;
use App\Repositories\PaquetesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PaquetesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PaquetesRepository
     */
    protected $paquetesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->paquetesRepo = \App::make(PaquetesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_paquetes()
    {
        $paquetes = factory(Paquetes::class)->make()->toArray();

        $createdPaquetes = $this->paquetesRepo->create($paquetes);

        $createdPaquetes = $createdPaquetes->toArray();
        $this->assertArrayHasKey('id', $createdPaquetes);
        $this->assertNotNull($createdPaquetes['id'], 'Created Paquetes must have id specified');
        $this->assertNotNull(Paquetes::find($createdPaquetes['id']), 'Paquetes with given id must be in DB');
        $this->assertModelData($paquetes, $createdPaquetes);
    }

    /**
     * @test read
     */
    public function test_read_paquetes()
    {
        $paquetes = factory(Paquetes::class)->create();

        $dbPaquetes = $this->paquetesRepo->find($paquetes->id);

        $dbPaquetes = $dbPaquetes->toArray();
        $this->assertModelData($paquetes->toArray(), $dbPaquetes);
    }

    /**
     * @test update
     */
    public function test_update_paquetes()
    {
        $paquetes = factory(Paquetes::class)->create();
        $fakePaquetes = factory(Paquetes::class)->make()->toArray();

        $updatedPaquetes = $this->paquetesRepo->update($fakePaquetes, $paquetes->id);

        $this->assertModelData($fakePaquetes, $updatedPaquetes->toArray());
        $dbPaquetes = $this->paquetesRepo->find($paquetes->id);
        $this->assertModelData($fakePaquetes, $dbPaquetes->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_paquetes()
    {
        $paquetes = factory(Paquetes::class)->create();

        $resp = $this->paquetesRepo->delete($paquetes->id);

        $this->assertTrue($resp);
        $this->assertNull(Paquetes::find($paquetes->id), 'Paquetes should not exist in DB');
    }
}
