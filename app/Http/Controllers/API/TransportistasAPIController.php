<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTransportistasAPIRequest;
use App\Http\Requests\API\UpdateTransportistasAPIRequest;
use App\Models\Transportistas;
use App\Repositories\TransportistasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TransportistasController
 * @package App\Http\Controllers\API
 */

class TransportistasAPIController extends AppBaseController
{
    /** @var  TransportistasRepository */
    private $transportistasRepository;

    public function __construct(TransportistasRepository $transportistasRepo)
    {
        $this->transportistasRepository = $transportistasRepo;
    }

    /**
     * Display a listing of the Transportistas.
     * GET|HEAD /transportistas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $transportistas = $this->transportistasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($transportistas->toArray(), 'Transportistas retrieved successfully');
    }

    /**
     * Store a newly created Transportistas in storage.
     * POST /transportistas
     *
     * @param CreateTransportistasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTransportistasAPIRequest $request)
    {
        $input = $request->all();

        $transportistas = $this->transportistasRepository->create($input);

        return $this->sendResponse($transportistas->toArray(), 'Transportistas saved successfully');
    }

    /**
     * Display the specified Transportistas.
     * GET|HEAD /transportistas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Transportistas $transportistas */
        $transportistas = $this->transportistasRepository->find($id);

        if (empty($transportistas)) {
            return $this->sendError('Transportistas not found');
        }

        return $this->sendResponse($transportistas->toArray(), 'Transportistas retrieved successfully');
    }

    /**
     * Update the specified Transportistas in storage.
     * PUT/PATCH /transportistas/{id}
     *
     * @param int $id
     * @param UpdateTransportistasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransportistasAPIRequest $request)
    {
        $input = $request->all();

        /** @var Transportistas $transportistas */
        $transportistas = $this->transportistasRepository->find($id);

        if (empty($transportistas)) {
            return $this->sendError('Transportistas not found');
        }

        $transportistas = $this->transportistasRepository->update($input, $id);

        return $this->sendResponse($transportistas->toArray(), 'Transportistas updated successfully');
    }

    /**
     * Remove the specified Transportistas from storage.
     * DELETE /transportistas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Transportistas $transportistas */
        $transportistas = $this->transportistasRepository->find($id);

        if (empty($transportistas)) {
            return $this->sendError('Transportistas not found');
        }

        $transportistas->delete();

        return $this->sendResponse($id, 'Transportistas deleted successfully');
    }
}
