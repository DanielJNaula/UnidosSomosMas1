@extends('layouts.mainAdmin')

@section('title', 'Home Administrador')
 
@section('contenido')
<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido administrador de unidos somos más </div>

                <div class="panel-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <span class="text-success">Te encuentras conectado</span>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
