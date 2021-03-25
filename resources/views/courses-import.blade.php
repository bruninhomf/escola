@extends('layouts.head')

@section('content')
<div class="wrapper">

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Importar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Cursos</li>
            </ol>
          </div>
          <div class="pt-3 ml-auto">
            <a class="btn btn-secondary btn-sm" href="/cursos">
              <i class="fas fa-arrow-left pr-1"></i>
              Voltar
            </a>
            <a class="btn btn-success btn-sm" href="curso/novo">
                <i class="fas fa-plus pr-1"></i>
                Adicionar
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Cursos</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="col-12 p-4">
            <form action="/import" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="custom-file">
                <label for="exampleFormControlFile1">Example file input</label>
                <input id="file" name="file" type="file" class="form-control-file border" id="exampleFormControlFile1">
                @error('file')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-12 py-4">
                <div class="pt-3 text-right">
                  <button type="submit" class="btn btn-success btn-sm">
                    <i class="fas fa-save pr-1"></i>
                    Salvar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>
  </div>
</div>
@endsection
