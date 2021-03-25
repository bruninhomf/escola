@extends('layouts.head')

@section('content')
<div class="wrapper">

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cursos</h1>
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
            <a class="btn btn-success btn-sm" href="/curso/novo">
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
          <form action="/curso/{{ $course->id }}" method="post">
            @csrf
            <div class="col-12 py-4">
              <div class="form-group">
                <label for="name">Nome do curso</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ $course->name }}">
              </div>
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

    </section>
  </div>
</div>
@endsection
