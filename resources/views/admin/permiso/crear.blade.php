@extends("theme.$theme.layout")
@section('titulo')
Permisos
@endsection

@section('contenido')
<div class="row">
    <div class="col-12">
        <!-- /.card-header -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear Nuevo Permiso</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection