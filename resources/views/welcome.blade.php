{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')
@section('meta_tags')
 echo <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title', 'Membresia NIB')

@section('content_header')
    <h1>MembresiaNIB</h1>

    <?php echo csrf_token(); ?>

@stop

@section('content')
    <div id="root">
     <script src="{{mix('js/app.js')}}" ></script>
     <script type="text/javascript">

     </script>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
