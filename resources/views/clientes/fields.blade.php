<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombres', 'Nombres:') !!}
    {!! Form::text('Nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Apellidos', 'Apellidos:') !!}
    {!! Form::text('Apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Celular', 'Celular:') !!}
    {!! Form::text('Celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DNI', 'Dni:') !!}
    {!! Form::text('DNI', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ciudad', 'Ciudad:') !!}
    {!! Form::select('Ciudad', ['Lima' => 'Lima', 'Cusco' => 'Cusco', 'Arequipa' => 'Arequipa', 'Trujillo' => 'Trujillo', 'Huaraz' => 'Huaraz', 'Iquitos' => 'Iquitos', 'Tacna' => 'Tacna', 'Chiclayo' => 'Chiclayo', 'Huancayo' => 'Huancayo', 'Puno' => 'Puno', 'Ayacucho' => 'Ayacucho', 'Pucallpa' => 'Pucallpa', 'Cajamarca' => 'Cajamarca', 'Ica' => 'Ica', 'Abancay' => 'Abancay', 'Juliaca' => 'Juliaca', 'Moyobamba' => 'Moyobamba', 'Huanuco' => 'Huanuco', 'Callao' => 'Callao', 'Piura' => 'Piura', 'Chimbote' => 'Chimbote', 'Chachapoyas' => 'Chachapoyas', 'Tumbes' => 'Tumbes', 'Tarapoto' => 'Tarapoto', 'Huacho' => 'Huacho', 'Lambayeque' => 'Lambayeque', 'Tarma' => 'Tarma', 'Huancavelica' => 'Huancavelica', 'Andahuaylas' => 'Andahuaylas', 'Moquegua' => 'Moquegua', 'Ilo' => 'Ilo', 'Paita' => 'Paita', 'Pisco' => 'Pisco', 'Nasca' => 'Nasca', 'Talara' => 'Talara', 'Barranca' => 'Barranca', 'Mollendo' => 'Mollendo', 'Chulucanas' => 'Chulucanas', 'Huamachuco' => 'Huamachuco', 'Huanta' => 'Huanta'], null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Direccion', 'Direccion:') !!}
    {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota Adicional Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Nota_adicional', 'Nota Adicional:') !!}
    {!! Form::textarea('Nota_adicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancel</a>
</div>
