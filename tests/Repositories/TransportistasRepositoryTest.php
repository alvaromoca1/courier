<?php namespace Tests\Repositories;

use App\Models\Transportistas;
use App\Repositories\TransportistasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TransportistasRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TransportistasRepository
     */
    protected $transportistasRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->transportistasRepo = \App::make(TransportistasRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_transportistas()
    {
        $transportistas = factory(Transportistas::class)->make()->toArray();

        $createdTransportistas = $this->transportistasRepo->create($transportistas);

        $createdTransportistas = $createdTransportistas->toArray();
        $this->assertArrayHasKey('id', $createdTransportistas);
        $this->assertNotNull($createdTransportistas['id'], 'Created Transportistas must have id specified');
        $this->assertNotNull(Transportistas::find($createdTransportistas['id']), 'Transportistas with given id must be in DB');
        $this->assertModelData($transportistas, $createdTransportistas);
    }

    /**
     * @test read
     */
    public function test_read_transportistas()
    {
        $transportistas = factory(Transportistas::class)->create();

        $dbTransportistas = $this->transportistasRepo->find($transportistas->id);

        $dbTransportistas = $dbTransportistas->toArray();
        $this->assertModelData($transportistas->toArray(), $dbTransportistas);
    }

    /**
     * @test update
     */
    public function test_update_transportistas()
    {
        $transportistas = factory(Transportistas::class)->create();
        $fakeTransportistas = factory(Transportistas::class)->make()->toArray();

        $updatedTransportistas = $this->transportistasRepo->update($fakeTransportistas, $transportistas->id);

        $this->assertModelData($fakeTransportistas, $updatedTransportistas->toArray());
        $dbTransportistas = $this->transportistasRepo->find($transportistas->id);
        $this->assertModelData($fakeTransportistas, $dbTransportistas->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_transportistas()
    {
        $transportistas = factory(Transportistas::class)->create();

        $resp = $this->transportistasRepo->delete($transportistas->id);

        $this->assertTrue($resp);
        $this->assertNull(Transportistas::find($transportistas->id), 'Transportistas should not exist in DB');
    }
}
