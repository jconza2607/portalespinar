@extends('layouts.default')

@section('title', 'Gestion de Roles y Permisos')

@push('css')
    <link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="/assets/plugins/datatables.net/js/dataTables.min.js"></script>
    <script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="/assets/js/demo/table-manage-default.demo.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/plugins/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/plugins/pdfmake/build/vfs_fonts.js"></script>
    <script src="/assets/plugins/jszip/dist/jszip.min.js"></script>
    <script src="/assets/js/demo/table-manage-buttons.demo.js"></script>
    <script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
    <script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')	
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">General</li>
	</ol>	
	<h1 class="page-header">Gestion de Roles y Permisos</h1>	
    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif
	<div class="row">
        {{-- Inicio de Roles --}}		
		<div class="col-xl-6">			
			<div class="panel panel-inverse" data-sortable-id="ui-general-2">				
				<div class="panel-heading">
					<h4 class="panel-title">Gestión de Módulos</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>				
				<div class="panel-body">                    
                    <div class="row">                            
                        <div class="col-md-12">
                            <p>
                                <a href="#modalCreateModule" class="btn btn-default me-5px" data-bs-toggle="modal"><i class="fa fa-plus"></i> Add Módulo</a>                                    
                            </p>                                                         
                        </div>
                    </div>
                   
                    <table id="data-table-default" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th class="text-nowrap">Permisos</th>
                                <th class="text-nowrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr class="odd gradeX">
                                    <td>{{ $role->name }}</td>
                                    <td style="white-space: normal; word-break: break-word;">{{ $role->permissions->pluck('name')->join(', ') }}</td>
                                    <td>
                                        <a href="{{ route('permissions.edit', $role) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('permissions.destroy', $role) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>            
				</div>					
			</div>			
		</div>
		{{-- Fin de Roles --}}
        {{-- Inicio Permisos --}}
		<div class="col-xl-6">			
			<div class="panel panel-inverse" data-sortable-id="ui-general-4">				
				<div class="panel-heading">
					<h4 class="panel-title">Gestion de Permisos</span></h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>				
				<div class="panel-body">					
                    <div class="row">                            
                        <div class="col-md-12">
                            <p>
                                <a href="#modalCreatePermission" class="btn btn-default me-5px" data-bs-toggle="modal"><i class="fa fa-plus"></i> Add Permiso</a>                                    
                            </p>
                            {{-- <p>
                                <a href="{{ route('permissions.create_permission') }}" class="btn btn-default me-5px"><i class="fa fa-plus"></i> Add Permission</a>                                    
                            </p>  --}}                               
                        </div>
                    </div>                        
                    <table id="data-table-buttons" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th width="1%"></th>                                    
                                <th class="text-nowrap">Permiso</th>
                                <th class="text-nowrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $permission)
                                <tr class="odd gradeX">
                                    <td width="1%" class="fw-bold">{{ $permission->id }}</td>                                                                            
                                    <td>{{ $permission->name }}</td>
                                    <td><form action="{{ route('permissions.destroy_permission', $permission) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form></td>                                    
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
				</div>				
			</div>
		</div>		
	</div>
    <!-- Incluyendo Modal -->
    @include('permissions.modalCreatePermission')
    @include('permissions.modalCreateModule')
    <!-- Fin Modal -->	
@endsection
