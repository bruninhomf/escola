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
              <a class="btn btn-secondary btn-sm" href="/alunos">
                <i class="fas fa-arrow-left pr-1"></i>
                Voltar
              </a>
              <a class="btn btn-success btn-sm" href="/aluno/editar/{{ $student->id }}">
                <i class="fas fa-pencil-alt pr-1"></i>
                Editar
              </a>
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
          <form action="/curso" method="post">
            @csrf
            <div class="row">
              <div class="col-6 py-4">
                <div class="form-group">
                  <label for="">Informações</label>
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          Foto: 
                        </td>
                        <td>
                          <img src="/img/students/{{ $student->image }}" width="200">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Matrícula: 
                        </td>
                        <td>
                          {{ $student->id }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Aluno: 
                        </td>
                        <td>
                          {{ $student->name }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Curso: 
                        </td>
                        <td>
                          {{ $student->course_id }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Turma: 
                        </td>
                        <td>
                          {{ $student->class }}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-6 py-4">
                <div class="form-group">
                  <label for="">Endereço</label>
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          Rua: 
                        </td>
                        <td>
                          {{ $student->street }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Número: 
                        </td>
                        <td>
                          {{ $student->number }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Bairro: 
                        </td>
                        <td>
                          {{ $student->district }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Cidade: 
                        </td>
                        <td>
                          {{ $student->city }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Estado: 
                        </td>
                        <td>
                          {{ $student->state }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          CEP: 
                        </td>
                        <td>
                          {{ $student->zip_code }}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </form>
        </div>
      </div>

    </section>
  </div>
</div>
@endsection
