<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $clientes->id !!}</p>
</div>

<!-- Nombres Field -->
<div class="form-group">
    {!! Form::label('Nombres', 'Nombres:') !!}
    <p>{!! $clientes->Nombres !!}</p>
</div>

<!-- Apellidos Field -->
<div class="form-group">
    {!! Form::label('Apellidos', 'Apellidos:') !!}
    <p>{!! $clientes->Apellidos !!}</p>
</div>

<!-- Celular Field -->
<div class="form-group">
    {!! Form::label('Celular', 'Celular:') !!}
    <p>{!! $clientes->Celular !!}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{!! $clientes->correo !!}</p>
</div>

<!-- Dni Field -->
<div class="form-group">
    {!! Form::label('DNI', 'Dni:') !!}
    <p>{!! $clientes->DNI !!}</p>
</div>

<!-- Ciudad Field -->
<div class="form-group">
    {!! Form::label('Ciudad', 'Ciudad:') !!}
    <p>{!! $clientes->Ciudad !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('Direccion', 'Direccion:') !!}
    <p>{!! $clientes->Direccion !!}</p>
</div>

<!-- Nota Adicional Field -->
<div class="form-group">
    {!! Form::label('Nota_adicional', 'Nota Adicional:') !!}
    <p>{!! $clientes->Nota_adicional !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $clientes->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $clientes->updated_at !!}</p>
</div>

