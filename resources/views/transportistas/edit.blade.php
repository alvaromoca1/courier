@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transportistas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transportistas, ['route' => ['transportistas.update', $transportistas->id], 'method' => 'patch']) !!}

                        @include('transportistas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection