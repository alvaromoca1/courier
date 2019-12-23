<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnviosRequest;
use App\Http\Requests\UpdateEnviosRequest;
use App\Repositories\EnviosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Transportistas;
use App\Models\Paquetes;
use Flash;
use Response;

class EnviosController extends AppBaseController
{
    /** @var  EnviosRepository */
    private $enviosRepository;

    public function __construct(EnviosRepository $enviosRepo)
    {
        $this->enviosRepository = $enviosRepo;
    }

    /**
     * Display a listing of the Envios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $envios = $this->enviosRepository->all();

        return view('envios.index')
            ->with('envios', $envios);
    }

    /**
     * Show the form for creating a new Envios.
     *
     * @return Response
     */
    public function create()
    {
        $transportistas = Transportistas::pluck('Nombres','id');
        $paquetes = Paquetes::pluck('Codigo_paquete','id');
        return view('envios.create', compact('transportistas','paquetes'));
    }

    /**
     * Store a newly created Envios in storage.
     *
     * @param CreateEnviosRequest $request
     *
     * @return Response
     */
    public function store(CreateEnviosRequest $request)
    {
        $input = $request->all();

        $envios = $this->enviosRepository->create($input);

        Flash::success('Envios saved successfully.');

        return redirect(route('envios.index'));
    }

    /**
     * Display the specified Envios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $envios = $this->enviosRepository->find($id);

        if (empty($envios)) {
            Flash::error('Envios not found');

            return redirect(route('envios.index'));
        }

        return view('envios.show')->with('envios', $envios);
    }

    /**
     * Show the form for editing the specified Envios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $envios = $this->enviosRepository->find($id);

        if (empty($envios)) {
            Flash::error('Envios not found');

            return redirect(route('envios.index'));
        }

        return view('envios.edit')->with('envios', $envios);
    }

    /**
     * Update the specified Envios in storage.
     *
     * @param int $id
     * @param UpdateEnviosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnviosRequest $request)
    {
        $envios = $this->enviosRepository->find($id);

        if (empty($envios)) {
            Flash::error('Envios not found');

            return redirect(route('envios.index'));
        }

        $envios = $this->enviosRepository->update($request->all(), $id);

        Flash::success('Envios updated successfully.');

        return redirect(route('envios.index'));
    }

    /**
     * Remove the specified Envios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $envios = $this->enviosRepository->find($id);

        if (empty($envios)) {
            Flash::error('Envios not found');

            return redirect(route('envios.index'));
        }

        $this->enviosRepository->delete($id);

        Flash::success('Envios deleted successfully.');

        return redirect(route('envios.index'));
    }
}
