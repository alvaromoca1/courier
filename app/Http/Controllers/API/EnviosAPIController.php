<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEnviosAPIRequest;
use App\Http\Requests\API\UpdateEnviosAPIRequest;
use App\Models\Envios;
use App\Repositories\EnviosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class EnviosController
 * @package App\Http\Controllers\API
 */

class EnviosAPIController extends AppBaseController
{
    /** @var  EnviosRepository */
    private $enviosRepository;

    public function __construct(EnviosRepository $enviosRepo)
    {
        $this->enviosRepository = $enviosRepo;
    }

    /**
     * Display a listing of the Envios.
     * GET|HEAD /envios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $envios = $this->enviosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($envios->toArray(), 'Envios retrieved successfully');
    }

    /**
     * Store a newly created Envios in storage.
     * POST /envios
     *
     * @param CreateEnviosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEnviosAPIRequest $request)
    {
        $input = $request->all();

        $envios = $this->enviosRepository->create($input);

        return $this->sendResponse($envios->toArray(), 'Envios saved successfully');
    }

    /**
     * Display the specified Envios.
     * GET|HEAD /envios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Envios $envios */
        $envios = $this->enviosRepository->find($id);

        if (empty($envios)) {
            return $this->sendError('Envios not found');
        }

        return $this->sendResponse($envios->toArray(), 'Envios retrieved successfully');
    }

    /**
     * Update the specified Envios in storage.
     * PUT/PATCH /envios/{id}
     *
     * @param int $id
     * @param UpdateEnviosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnviosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Envios $envios */
        $envios = $this->enviosRepository->find($id);

        if (empty($envios)) {
            return $this->sendError('Envios not found');
        }

        $envios = $this->enviosRepository->update($input, $id);

        return $this->sendResponse($envios->toArray(), 'Envios updated successfully');
    }

    /**
     * Remove the specified Envios from storage.
     * DELETE /envios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Envios $envios */
        $envios = $this->enviosRepository->find($id);

        if (empty($envios)) {
            return $this->sendError('Envios not found');
        }

        $envios->delete();

        return $this->sendResponse($id, 'Envios deleted successfully');
    }
}
