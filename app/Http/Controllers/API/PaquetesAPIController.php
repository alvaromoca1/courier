<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePaquetesAPIRequest;
use App\Http\Requests\API\UpdatePaquetesAPIRequest;
use App\Models\Paquetes;
use App\Repositories\PaquetesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PaquetesController
 * @package App\Http\Controllers\API
 */

class PaquetesAPIController extends AppBaseController
{
    /** @var  PaquetesRepository */
    private $paquetesRepository;

    public function __construct(PaquetesRepository $paquetesRepo)
    {
        $this->paquetesRepository = $paquetesRepo;
    }

    /**
     * Display a listing of the Paquetes.
     * GET|HEAD /paquetes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $paquetes = $this->paquetesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($paquetes->toArray(), 'Paquetes retrieved successfully');
    }

    /**
     * Store a newly created Paquetes in storage.
     * POST /paquetes
     *
     * @param CreatePaquetesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePaquetesAPIRequest $request)
    {
        $input = $request->all();

        $paquetes = $this->paquetesRepository->create($input);

        return $this->sendResponse($paquetes->toArray(), 'Paquetes saved successfully');
    }

    /**
     * Display the specified Paquetes.
     * GET|HEAD /paquetes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Paquetes $paquetes */
        $paquetes = $this->paquetesRepository->find($id);

        if (empty($paquetes)) {
            return $this->sendError('Paquetes not found');
        }

        return $this->sendResponse($paquetes->toArray(), 'Paquetes retrieved successfully');
    }

    /**
     * Update the specified Paquetes in storage.
     * PUT/PATCH /paquetes/{id}
     *
     * @param int $id
     * @param UpdatePaquetesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaquetesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Paquetes $paquetes */
        $paquetes = $this->paquetesRepository->find($id);

        if (empty($paquetes)) {
            return $this->sendError('Paquetes not found');
        }

        $paquetes = $this->paquetesRepository->update($input, $id);

        return $this->sendResponse($paquetes->toArray(), 'Paquetes updated successfully');
    }

    /**
     * Remove the specified Paquetes from storage.
     * DELETE /paquetes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Paquetes $paquetes */
        $paquetes = $this->paquetesRepository->find($id);

        if (empty($paquetes)) {
            return $this->sendError('Paquetes not found');
        }

        $paquetes->delete();

        return $this->sendResponse($id, 'Paquetes deleted successfully');
    }
}
