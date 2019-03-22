{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Membresia NIB')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="root">
     <script src="{{mix('js/app.js')}}" ></script>
     <script type="text/javascript">
          <Header />
     </script>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
