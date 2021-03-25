@extends('layouts.head')

@section('content')
<div class="wrapper">

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Alunos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Alunos</li>
            </ol>
          </div>
          <div class="pt-3 ml-auto">

            <div class="pl-5 pb-4 text-right">
              <a class="btn btn-success btn-sm" href="/aluno/novo">
                <i class="fas fa-plus pr-1"></i>
                Adicionar
              </a>
            </div>
            
            <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>

              <div class="sidebar-search-results">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <div class="search-title">
                      <b class="text-light"></b>N<b class="text-light"></b>o<b class="text-light"></b> <b class="text-light"></b>e<b class="text-light"></b>l<b class="text-light"></b>e<b class="text-light"></b>m<b class="text-light"></b>e<b class="text-light"></b>n<b class="text-light"></b>t<b class="text-light"></b> <b class="text-light"></b>f<b class="text-light"></b>o<b class="text-light"></b>u<b class="text-light"></b>n<b class="text-light"></b>d<b class="text-light"></b>!<b class="text-light"></b>
                    </div>
                    <div class="search-path"></div>
                  </a>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Alunos</h3>

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
                      <th style="width: 40%">
                          Nome do Curso
                      </th>
                      <th style="width: 5%">
                          Situação
                      </th>
                      <th style="width: 25%; text-align: center;">
                          Ações
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($students as $key => $student)
                  <tr>
                      <td>
                        {{ $student->id }}
                      </td>
                      <td>
                        {{ $student->name }}
                      </td>
                      <td class="project-state">
                        @if($student->status == 0)
                          <span class="badge badge-danger">Inativo</span>
                        @endif
                        @if($student->status == 1)
                          <span class="badge badge-success">Ativo</span>
                        @endif
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="/aluno/visualizar/{{ $student->id }}">
                              <i class="fas fa-eye">
                              </i>
                          </a>
                          <a class="btn btn-info btn-sm" href="/aluno/editar/{{ $student->id }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                          </a>
                          <a class="btn btn-danger btn-sm" href="/aluno/apagar/{{ $student->id }}">
                              <i class="fas fa-trash">
                              </i>
                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          {{ $students->links() }}
        </div>
      </div>

    </section>
  </div>
</div>
@endsection
