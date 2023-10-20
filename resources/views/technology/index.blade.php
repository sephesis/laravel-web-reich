@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Технологии</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 text-right">
              <a href="{{ route('technology.create') }}" class="btn btn-primary"> Добавить </a>
              <a href="{{ route('group.create') }}" class="btn btn-primary"> Добавить категорию </a>
            </div>
          <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              @if (count($technologies) > 0)
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th style="width:80%">Название</th>
                      <th style="">Категория</th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($technologies as $tech)
                      <tr id="technology-{{ $tech->id }}">
                        <td>{{ $tech->id }}</td>
                        <td><a href="{{ route('technology.show', $tech->id)}}">{{ $tech->title }}</a></td>
                        <td>{{ $tech->group->title }}</td>
                        <td><a data-id="{{ $tech->id }}" class=" btn btn-primary btn-sm update" href="javascript:void(0);"> Редактировать</a></td>
                        <td><a data-id="{{ $tech->id }}" data-url="{{ route('technology.delete', $tech->id)}}" class="btn btn-danger btn-sm delete" href="javascript:void(0);">Удалить</a></td>
                      </tr>
                      @endforeach
                  
                  
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              @else
                  <div>Пока не добавлено ни одной технологии. <a href="{{ route('technology.create') }}" target="_blank" >Добавить</a></div>
              @endif
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection