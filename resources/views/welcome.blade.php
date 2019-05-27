{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')
@section('meta_tags')
 echo <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title', 'Membresia NIB')

@section('content_header')
    <h1>MembresiaNIB</h1>

    <?php echo '<input type="hidden" id="csrf_token" value="'.csrf_token().'">'; ?>

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
    <script>window.axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf_token').value</script>
@stop
