<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransportistasRequest;
use App\Http\Requests\UpdateTransportistasRequest;
use App\Repositories\TransportistasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TransportistasController extends AppBaseController
{
    /** @var  TransportistasRepository */
    private $transportistasRepository;

    public function __construct(TransportistasRepository $transportistasRepo)
    {
        $this->transportistasRepository = $transportistasRepo;
    }

    /**
     * Display a listing of the Transportistas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transportistas = $this->transportistasRepository->all();

        return view('transportistas.index')
            ->with('transportistas', $transportistas);
    }

    /**
     * Show the form for creating a new Transportistas.
     *
     * @return Response
     */
    public function create()
    {
        return view('transportistas.create');
    }

    /**
     * Store a newly created Transportistas in storage.
     *
     * @param CreateTransportistasRequest $request
     *
     * @return Response
     */
    public function store(CreateTransportistasRequest $request)
    {
        $input = $request->all();

        $transportistas = $this->transportistasRepository->create($input);

        Flash::success('Transportistas saved successfully.');

        return redirect(route('transportistas.index'));
    }

    /**
     * Display the specified Transportistas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transportistas = $this->transportistasRepository->find($id);

        if (empty($transportistas)) {
            Flash::error('Transportistas not found');

            return redirect(route('transportistas.index'));
        }

        return view('transportistas.show')->with('transportistas', $transportistas);
    }

    /**
     * Show the form for editing the specified Transportistas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transportistas = $this->transportistasRepository->find($id);

        if (empty($transportistas)) {
            Flash::error('Transportistas not found');

            return redirect(route('transportistas.index'));
        }

        return view('transportistas.edit')->with('transportistas', $transportistas);
    }

    /**
     * Update the specified Transportistas in storage.
     *
     * @param int $id
     * @param UpdateTransportistasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransportistasRequest $request)
    {
        $transportistas = $this->transportistasRepository->find($id);

        if (empty($transportistas)) {
            Flash::error('Transportistas not found');

            return redirect(route('transportistas.index'));
        }

        $transportistas = $this->transportistasRepository->update($request->all(), $id);

        Flash::success('Transportistas updated successfully.');

        return redirect(route('transportistas.index'));
    }

    /**
     * Remove the specified Transportistas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transportistas = $this->transportistasRepository->find($id);

        if (empty($transportistas)) {
            Flash::error('Transportistas not found');

            return redirect(route('transportistas.index'));
        }

        $this->transportistasRepository->delete($id);

        Flash::success('Transportistas deleted successfully.');

        return redirect(route('transportistas.index'));
    }
}
