@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Решения ({{ $counter }})</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 text-right">
              <a href="{{ route('solution.create') }}" target="_blank" class="btn btn-primary"> Добавить </a>
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
              @if ($counter > 0)
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th style="width:5%">ID</th>
                      <th style="width:70%">Название</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($solutions as $solution)
                      <tr id="solution-{{ $solution->id }}">
                        <td>{{ $solution->id }}</td>
                        <td><a href="{{ route('solution.show', $solution->id)}}">{{ $solution->title }}</a></td>
                        <td><a data-id="{{ $solution->id }}" data-url="{{ route('solution.edit', $solution->id ) }}" class=" btn btn-primary btn-sm update" href="{{ route('solution.edit', $solution->id ) }}"> <i class="fas fa-pencil-alt"></i> Редактировать</a>
                          <a data-id="{{ $solution->id }}" data-url="{{ route('solution.delete', $solution->id)}}" class="btn btn-danger btn-sm delete" href="javascript:void(0);"><i class="fas fa-trash"> </i> Удалить</a>
                        </td>
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
                  <div>Пока не добавлено ни одного решения. <a href="{{ route('solution.create') }}" target="_blank">Добавить</a> </div>
              @endif
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      {{-- создаем обертки для бутстраповских модалок --}}
      </div>
      <!-- /.content -->
@endsection