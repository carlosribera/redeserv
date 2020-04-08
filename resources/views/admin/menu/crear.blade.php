@extends("theme.$theme.layout")
@section('titulo')
Sistema Menus
@endsection

@section('contenido')
<div class="row">
    <div class="col-12">
        <!-- /.card-header -->
        @include('includes.form_error')
        @include('includes.mensaje')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear Nuevo Menu</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    @include('admin.menu.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton_form_crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection