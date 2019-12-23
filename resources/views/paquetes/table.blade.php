<div class="table-responsive">
    <table class="table" id="paquetes-table">
        <thead>
            <tr>
                <th>Estado</th>
        <th>Codigo Paquete</th>
        <th>Cliente Id</th>
        <th>Nombre Destino</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($paquetes as $paquetes)
            <tr>
                <td>{!! $paquetes->estado !!}</td>
            <td>{!! $paquetes->Codigo_paquete !!}</td>
            <td>{!! $paquetes->cliente_id !!}</td>
            <td>{!! $paquetes->Nombre_destino !!}</td>
                <td>
                    {!! Form::open(['route' => ['paquetes.destroy', $paquetes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('paquetes.show', [$paquetes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('paquetes.edit', [$paquetes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
