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
            <a class="btn btn-primary btn-sm" href="import">
              <i class="fas fa-upload pr-1"></i>
              Importar
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
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          Id
                      </th>
                      <th style="width: 75%">
                          Nome do Curso
                      </th>
                      <th class="text-center">
                          Ações
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($courses as $key => $course)
                  <tr>
                      <td>
                          {{ $course->id }}
                      </td>
                      <td>
                        {{ $course->name }}
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="/curso/visualizar/{{ $course->id }}">
                              <i class="fas fa-eye">
                              </i>
                          </a>
                          <a class="btn btn-info btn-sm" href="/curso/editar/{{ $course->id }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                          </a>
                          <a class="btn btn-danger btn-sm" href="/curso/apagar/{{ $course->id }}">
                              <i class="fas fa-trash">
                              </i>
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          {{ $courses->links() }}
        </div>
      </div>
      <script>
        console.log('ola')
        $(".card").remove();
      </script>

    </section>
  </div>
</div>
@endsection
