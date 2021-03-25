@extends('layouts.head')
@extends('layouts.zip')

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
              <a class="btn btn-success btn-sm" href="add-aluno">
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

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informações</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Endereço</a>
            </li>
          </ul>
          <div class="card-header">
            <form action="/aluno/{{ $student->id }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="col-12 pt-4">
                    <div class="form-group">
                      <label for="name">Nome Completo</label>
                      <input id="name" name="name" type="text" class="form-control" value="{{ $student->name }}">
                    </div>
                  </div>
                  <div class="row px-2">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="course_id">Curso</label>
                          <select name="course_id" id="course_id" class="form-control">
                            <option value="{{ $student->course_id }}" selected>
                              {{ $cursos }}
                            </option>
                            @foreach($courses as $key => $course)
                              <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="class">Turma</label>
                        <input id="class" name="class" type="text" class="form-control" value="{{ $student->class }}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                          <option value="1" @if($student->status == 1)
                            selected
                          @endif>Ativar</option>
                          <option value="0" @if($student->status == 0)
                            selected
                          @endif>Desativar</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="custom-file">
                        <label for="exampleFormControlFile1">Foto</label>
                        <input id="image" name="image" type="file" onforminput="sdfg"
                        class="form-control-file border" id="exampleFormControlFile1">
                      </div>
                    </div>
                  </div>
                </div>
                  
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="row">
                    <div class="col-2 pt-4">
                      <div class="form-group">
                        <label for="zip_code">CEP</label>
                        <input id="zip_code" name="zip_code" type="text" class="form-control" value="{{ $student->zip_code }}">
                      </div>
                    </div>
                    <div class="col-10 pt-4">
                      <div class="form-group">
                        <label for="street">Rua</label>
                        <input id="street" name="street" type="text" class="form-control" value="{{ $student->street }}">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="form-group">
                        <label for="number">Número</label>
                        <input id="number" name="number" type="text" class="form-control" value="{{ $student->number }}">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="district">Bairro</label>
                        <input id="district" name="district" type="text" class="form-control" value="{{ $student->district }}">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="city">Cidade</label>
                        <input id="city" name="city" type="text" class="form-control" value="{{ $student->city }}">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="form-group">
                        <label for="state">Estado</label>
                        <input id="state" name="state" type="text" class="form-control" value="{{ $student->state }}">
                      </div>
                    </div>
                  </div>

                </div>
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
  
    </section>
  </div>
</div>
@endsection
