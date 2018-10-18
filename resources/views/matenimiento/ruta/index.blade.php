@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row no-space">
            <!-- Contenido página -->
            <div class="col-lg-10 mt-3" id="contenido">
                <section class="contenido">
                    <h3 class="text-danger">No existen rutas.</h3>
                    <h3 class="text-secondary">Rutas de pagos</h3>
                    <h3 class="text-primary">Modificar ruta</h3>
                  <hr>
                  <div class="row justify-content-between">
                    <div class="col-lg-8">
                      <div class="row">

                            <!-- Lista de rutas contenedor -->
                            <div class="col-lg-6 mb-3">
                              <div class="card rounded">
                                <div style="color: #FFF; border-top-left-radius: 3px; border-top-right-radius: 3px;" class="title-ruta bg-info p-5 d-flex align-items-center justify-content-center">
                                  <h3></h3>
                                </div>
                                <div class="card-body">
                                  <h6 class="card-subtitle mb-2 text-muted">Encargado: <span class="small text-primary"></span></h6>
                                  <hr>
                                  <p class="card-text text-secondary">Clientes de esta ruta: <span class="badge bg-dark text-light"></span></p>
                                  <hr>
                                  <a href="" class="card-link btn btn-info btn-sm"><i class="material-icons">mode_edit</i> Modificar</a>
                                  <!-- <a href="#" class="card-link btn btn-danger btn-sm">Eliminar</a> -->
                                </div>
                              </div>
                            </div>

                      </div>
                    </div>

                    <div class="col-lg-4">
                      <form action="" method="post" class="card">
                        <h3 class="text-secondary text-center mt-3">Nueva ruta</h3>
                        <hr>
                        <div class="card-body">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-12 mb-3">
                                <label for="">Nombre de ruta</label>
                                <textarea name="rutaName" class="form-control"></textarea>
                              </div>
                              <div class="col-lg-12">
                                <label for="">Encargado</label>
                                <select class="custom-select" name="encargado">
                                    <option value=""></option>
                                </select>
                              </div>
                            </div>
                            <input type="submit" name="crearRuta" class="btn btn-primary mt-3" value="Crear ruta">
                          </div>
                        </div>
                      </form>
                    </div>


                    <div class="col-lg-6">
                      <form action="" method="post" class="card">
                        <!-- <h3 class="text-secondary text-center mt-3">Nueva ruta</h3> -->
                        <!-- <hr> -->
                        <div class="card-body">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-12 mb-3">
                                <label for="">Nombre de ruta</label>
                                <textarea name="rutaName" class="form-control"></textarea>
                              </div>
                              <div class="col-lg-12">
                                <label for="">Encargado</label>
                                <select class="custom-select" name="encargado">
                                    <option value=""></option>
                                </select>
                              </div>
                            </div>
                            <button type="submit" name="modificarRuta" class="btn btn-info btn-sm mt-3" value="Crear ruta"><i class="material-icons">mode_edit</i> Modificar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
            </div>
        </div>
    </div>

@endsection