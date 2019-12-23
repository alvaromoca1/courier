@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Envios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($envios, ['route' => ['envios.update', $envios->id], 'method' => 'patch']) !!}

                        @include('envios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection