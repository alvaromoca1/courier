<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaquetesRequest;
use App\Http\Requests\UpdatePaquetesRequest;
use App\Repositories\PaquetesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Clientes;
use Flash;
use Response;

class PaquetesController extends AppBaseController
{
    /** @var  PaquetesRepository */
    private $paquetesRepository;

    public function __construct(PaquetesRepository $paquetesRepo)
    {
        $this->paquetesRepository = $paquetesRepo;
    }

    /**
     * Display a listing of the Paquetes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $paquetes = $this->paquetesRepository->all();

        return view('paquetes.index')
            ->with('paquetes', $paquetes);
    }

    /**
     * Show the form for creating a new Paquetes.
     *
     * @return Response
     */
    public function create()
    {
        $clientes = Clientes::pluck('Nombres','id');
        return view('paquetes.create', compact('clientes'));

    }

    /**
     * Store a newly created Paquetes in storage.
     *
     * @param CreatePaquetesRequest $request
     *
     * @return Response
     */
    public function store(CreatePaquetesRequest $request)
    {
        $input = $request->all();

        $paquetes = $this->paquetesRepository->create($input);

        Flash::success('Paquetes saved successfully.');

        return redirect(route('paquetes.index'));
    }

    /**
     * Display the specified Paquetes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paquetes = $this->paquetesRepository->find($id);

        if (empty($paquetes)) {
            Flash::error('Paquetes not found');

            return redirect(route('paquetes.index'));
        }

        return view('paquetes.show')->with('paquetes', $paquetes);
    }

    /**
     * Show the form for editing the specified Paquetes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paquetes = $this->paquetesRepository->find($id);

        if (empty($paquetes)) {
            Flash::error('Paquetes not found');

            return redirect(route('paquetes.index'));
        }

        return view('paquetes.edit')->with('paquetes', $paquetes);
    }

    /**
     * Update the specified Paquetes in storage.
     *
     * @param int $id
     * @param UpdatePaquetesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaquetesRequest $request)
    {
        $paquetes = $this->paquetesRepository->find($id);

        if (empty($paquetes)) {
            Flash::error('Paquetes not found');

            return redirect(route('paquetes.index'));
        }

        $paquetes = $this->paquetesRepository->update($request->all(), $id);

        Flash::success('Paquetes updated successfully.');

        return redirect(route('paquetes.index'));
    }

    /**
     * Remove the specified Paquetes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paquetes = $this->paquetesRepository->find($id);

        if (empty($paquetes)) {
            Flash::error('Paquetes not found');

            return redirect(route('paquetes.index'));
        }

        $this->paquetesRepository->delete($id);

        Flash::success('Paquetes deleted successfully.');

        return redirect(route('paquetes.index'));
    }
}
