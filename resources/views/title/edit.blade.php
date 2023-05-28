@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Редактировать заголовки</h1>
            </div><!-- /.col -->
        <!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
          <h4><i class="icon fa fa-check"></i>{{ \Session::get('success') }}</h4>
        </div>
        @endif
    <div class="row">
        <div class="col-md-6">
         <form action="{{ route('title.update') }}" method="post" enctype="multipart/form-data">
           @csrf
           @foreach ($titles as $key => $title)
           <div class="form-group">
             <label class="text-secondary">{{ $key }} </label>
             <input type="text" name="{{ $key }}" value="{{ $title}}" class="form-control">
           </div>
           @endforeach
             <div class="form-group">
               <button type="submit" class="btn btn-primary">Сохранить</button>
             </div>
         </form>
        </div>
    </div>
        </div>
    </section>
@endsection