<div class="table-responsive">
    <table class="table" id="transportistas-table">
        <thead>
            <tr>
                <th>Dni</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Celular</th>
        <th>Direccion</th>
        <th>Correo</th>
        <th>Nota Adicional</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transportistas as $transportistas)
            <tr>
                <td>{!! $transportistas->DNI !!}</td>
            <td>{!! $transportistas->Nombres !!}</td>
            <td>{!! $transportistas->Apellidos !!}</td>
            <td>{!! $transportistas->Celular !!}</td>
            <td>{!! $transportistas->direccion !!}</td>
            <td>{!! $transportistas->Correo !!}</td>
            <td>{!! $transportistas->Nota_adicional !!}</td>
                <td>
                    {!! Form::open(['route' => ['transportistas.destroy', $transportistas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('transportistas.show', [$transportistas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('transportistas.edit', [$transportistas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
