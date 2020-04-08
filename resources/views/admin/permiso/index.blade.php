@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section('contenido')
<div class="row">
    <div class="col-12"> 
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Permisos</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Slug</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach ($permisos as $permiso)
                              <tr>
                                  <td>{{$permiso->id}}</td>
                                  <td>{{$permiso->nombre}}</td>
                                  <td>{{$permiso->slug}}</td>
                                  <td></td>
                              </tr>
                          @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection