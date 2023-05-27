@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Теги ({{ count($tags) }})</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6 text-right">
              <a href="{{ route('tag.create') }}" class="btn btn-primary"> Добавить </a>
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
              @if (count($tags) > 0)
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
                      @foreach ($tags as $tag)
                      <tr id="tag-{{ $tag->id }}">
                        <td>{{ $tag->id }}</td>
                        <td><a href="{{ route('tag.show', $tag->id)}}">{{ $tag->title }}</a></td>
                        <td>
                          <a data-id="{{ $tag->id }}" class="btn btn-primary btn-sm update" href="javascript:void(0);"> <i class="fas fa-pencil-alt"></i> Редактировать</a>
                          <a data-id="{{ $tag->id }}" data-url="{{ route('tag.delete', $tag->id)}}" class="btn btn-danger btn-sm delete" href="javascript:void(0);"><i class="fas fa-trash"> </i> Удалить</a></td>
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
                  <div>Пока не добавлено ни одного тега. <a href="{{ route('tag.create') }}" target="_blank" >Добавить</a></div>
              @endif
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection