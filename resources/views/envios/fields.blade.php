<!-- Trasportista Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trasportista_id', 'Trasportista Id:') !!}
    {!! Form::select('trasportista_id', $transportistas, null, ['class' => 'form-control']) !!}
</div>

<!-- Paquete Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paquete_id', 'Paquete Id:') !!}
    {!! Form::select('paquete_id',$paquetes, null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('envios.index') !!}" class="btn btn-default">Cancel</a>
</div>
