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
              <a class="btn btn-secondary btn-sm" href="/cursos">
                <i class="fas fa-arrow-left pr-1"></i>
                Voltar
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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informações</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Endereço</a>
          </li>
        </ul>
        <div class="card-header">
          <form action="/aluno" method="post" enctype="multipart/form-data">
            @csrf


            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-12 pt-4">
                  <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input id="name" name="name" type="text" class="form-control">
                  </div>
                </div>
                <div class="row px-2">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="course_id">Curso</label>
                        <select name="course_id" id="course_id" class="form-control">
                          @foreach($courses as $key => $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="class">Turma</label>
                      <input id="class" name="class" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="status">Status</label>
                      <select name="status" id="status" class="form-control">
                        <option value="1">Ativar</option>
                        <option value="0">Desativar</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="custom-file">
                      <label for="exampleFormControlFile1">Example file input</label>
                      <input id="image" name="image" type="file" class="form-control-file border" id="exampleFormControlFile1">
                    </div>
                  </div>
                </div>
              </div>
                
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                  <div class="col-2 pt-4">
                    <div class="form-group">
                      <label for="zip_code">CEP</label>
                      <input id="zip_code" name="zip_code" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-10 pt-4">
                    <div class="form-group">
                      <label for="street">Rua</label>
                      <input id="street" name="street" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-group">
                      <label for="number">Número</label>
                      <input id="number" name="number" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="district">Bairro</label>
                      <input id="district" name="district" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="city">Cidade</label>
                      <input id="city" name="city" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-group">
                      <label for="state">Estado</label>
                      <input id="state" name="state" type="text" class="form-control">
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
