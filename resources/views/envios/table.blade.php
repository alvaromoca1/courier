<div class="table-responsive">
    <table class="table" id="envios-table">
        <thead>
            <tr>
                <th>Trasportista Id</th>
        <th>Paquete Id</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($envios as $envios)
            <tr>
                <td>{!! $envios->trasportista_id !!}</td>
            <td>{!! $envios->paquete_id !!}</td>
            <td>{!! $envios->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['envios.destroy', $envios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('envios.show', [$envios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('envios.edit', [$envios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
