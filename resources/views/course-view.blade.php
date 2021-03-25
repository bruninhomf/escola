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
            <a class="btn btn-primary btn-sm" href="/dashboard">
              <i class="fas fa-arrow-left pr-1"></i>
              Voltar
            </a>
            <a class="btn btn-success btn-sm" href="/curso/editar/{{ $course->id }}">
                <i class="fas fa-pencil-alt pr-1"></i>
                Editar
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
          <form action="/curso" method="post">
            @csrf
            <div class="col-12 py-4">
              <div class="form-group">
                <table>
                  <tbody>
                    <tr>
                      <td>
                        ID do curso: 
                      </td>
                      <td>
                        {{ $course->id }}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Nome do curso: 
                      </td>
                      <td>
                        {{ $course->name }}
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>

    </section>
  </div>
</div>
@endsection
