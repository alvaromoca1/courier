<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Codigo_paquete', 'Codigo paquete:') !!}
    {!! Form::text('Codigo_paquete', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::select('estado', ['inicio' => 'inicio', 'cargado' => 'cargado', 'destino' => 'destino', 'entregado' => 'entregado'], null, ['class' => 'form-control']) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Resivido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_resivido', 'Fecha Resivido:') !!}
    {!! Form::date('fecha_resivido', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_resivido').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::date('fecha_entrega', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    {!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Novedades Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Novedades', 'Novedades:') !!}
    {!! Form::textarea('Novedades', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Neto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Total_neto', 'Total Neto:') !!}
    {!! Form::text('Total_neto', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Igv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_IGV', 'Total Igv:') !!}
    {!! Form::text('total_IGV', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre_destino', 'Nombre Destino:') !!}
    {!! Form::text('Nombre_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ciudad_destino', 'Ciudad Destino:') !!}
    {!! Form::select('Ciudad_destino', ['Tacna' => 'Tacna', 'Lima' => 'Lima', 'Arequipa' => 'Arequipa', 'Trujillo' => 'Trujillo', 'Chiclayo' => 'Chiclayo', 'Piura' => 'Piura', 'Iquitos' => 'Iquitos', 'Cusco' => 'Cusco', 'Chimbote' => 'Chimbote', 'Huancayo' => 'Huancayo', 'Ica' => 'Ica', 'Juliaca' => 'Juliaca', 'Pucallpa' => 'Pucallpa', 'Sullana' => 'Sullana', 'Cajamarca' => 'Cajamarca', 'Ayacucho' => 'Ayacucho', 'Huanuco' => 'Huanuco', 'Puno' => 'Puno', 'Tarapoto' => 'Tarapoto', 'Huraz' => 'Huraz', 'Talara' => 'Talara', 'Moquegua' => 'Moquegua', 'Abancay' => 'Abancay'], null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_destino', 'Direccion Destino:') !!}
    {!! Form::text('direccion_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular_destino', 'Celular Destino:') !!}
    {!! Form::text('celular_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('paquetes.index') !!}" class="btn btn-default">Cancel</a>
</div>
