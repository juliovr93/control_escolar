@extends('private.admin.layouts.scaffold')

@section('title')
	UNICEBA - Títulos de profesores
@endsection

@section('content')
	<div class="row">
		<div class="row blue hide-on-small-only">
			<nav> 
		    <div class="nav-wrapper blue">
		      <div class="col s10 offset-s1">
		        <a href="{{route('admin.menu')}}" class="breadcrumb">Menú</a>
		        <a href="{{route('admin.menu')}}#configuraciones" class="breadcrumb">Configuraciones</a>
		        <a href="{{route('titulos_docentes.index')}}" class="breadcrumb">Títulos de profesores</a>
		      </div>
		    </div>
		  </nav>
		</div>

		<div class="row blue white-text">
			<div class="hide-on-med-and-up">
				<br>
			</div>
			<div class="col s10 offset-s1">
					<h5>Títulos de profesores</h5>				
			</div>
			<div class="col s10 offset-s1 m5 offset-m1">
					<p>Lista de los títulos que puede tener cada profesor.</p>
			</div>
			<div class="col m5 right-align hide-on-small-only">
					<a id="create_titulo_docente" class="waves-effect waves-light btn center-align blue darken-2"><i class="material-icons left">add</i>Nuevo título</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col s10 offset-s1">

			<table id="table_titulos_docentes" class="display highlight" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
        </tbody>
    </table>
		</div>
	</div>

	<div class="fixed-action-btn hide-on-med-and-up">
    <a href="#!" class="btn-floating btn-large blue darken-2">
      <i class="large material-icons">add</i>
    </a>
  </div>

	@include('private.admin.configuraciones.titulos_docentes.modals.titulo_docente')
@endsection

@section('script')
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
	<script type="text/javascript" src="{{ asset('/js/admin/configuraciones/titulos_docentes.js') }}"></script>
	
@endsection