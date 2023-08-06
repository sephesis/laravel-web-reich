@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Настройки </h1>
            </div>
            <!-- /.col -->
           
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
              @if (count($options) > 0)
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th style="width:74%">Название</th>
                    
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($options as $option)
                      <tr id="option-{{ $option->id }}">
                        <td>{{ $option->id }}</td>
                        <td><a href="">{{ $option->title }}</a></td>
                        <td>
                          <a data-id="{{ $option->id }}" class="btn btn-primary btn-sm update" href="javascript:void(0);"> <i class="fas fa-pencil-alt"></i> Редактировать</a>
                          <a data-id="{{ $option->id }}" data-url="" class="btn btn-danger btn-sm delete" href="javascript:void(0);"><i class="fas fa-trash"> </i> Удалить</a></td>
                      </tr>
                      @endforeach
                  
                  
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th></th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              @else
                  {{-- <div>Пока не добавлено ни одного тега. <a href="{{ route('option.create') }}" target="_blank" >Добавить</a></div> --}}
              @endif
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection