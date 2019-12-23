<!-- Dni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DNI', 'Dni:') !!}
    {!! Form::text('DNI', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Correo', 'Correo:') !!}
    {!! Form::email('Correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota Adicional Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Nota_adicional', 'Nota Adicional:') !!}
    {!! Form::textarea('Nota_adicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('transportistas.index') !!}" class="btn btn-default">Cancel</a>
</div>
