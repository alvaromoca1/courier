<div class="table-responsive">
    <table class="table" id="clientes-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Dni</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>Nota Adicional</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $clientes)
            <tr>
                <td>{!! $clientes->Nombres !!}</td>
            <td>{!! $clientes->Apellidos !!}</td>
            <td>{!! $clientes->Celular !!}</td>
            <td>{!! $clientes->correo !!}</td>
            <td>{!! $clientes->DNI !!}</td>
            <td>{!! $clientes->Ciudad !!}</td>
            <td>{!! $clientes->Direccion !!}</td>
            <td>{!! $clientes->Nota_adicional !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientes.show', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientes.edit', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
