  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Редактирование статьи «{{ $article->title }}»</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="text-secondary">Наименование </label>
            <input type="text" name="title" placeholder="Наименование" value="{{ $article->title }}" class="form-control">
           
          </div>
          <div class="form-group">
            <label class="text-secondary">Активность </label>
            <input type="checkbox" name="active" {{ $article->active == 1 ? 'checked' : ''}}  class="form-control">
          </div>
          <div class="form-group">
            <label class="text-secondary">Slug </label>
              <input type="text" name="slug" placeholder="Символьный код" value="{{ $article->slug }}" class="form-control">
            </div>
            <label class="text-secondary">Описание </label>
          <div class="form-group">
              <textarea rows="15" col="10" name="description" placeholder="Текст" class="form-control">{{ $article->description }}</textarea>
            </div>

             <div class="form-group">
              <label>Теги</label>
               <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                @foreach ($tags as $tag)
                <option selected value="{{ $tag->id }}" >{{ $tag->title }}</option>
                @endforeach
              </select> 
            </div> 

            <div class="form-group">
              <div class="input-group-append mb-3">
                <div class="input-group-text"> <a href="{{ asset('storage/' . $article->img) }}">Загруженный файл</a></div>
              </div>
              <label for="exampleInputFile">Загрузка файла</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Загрузка</span>
                </div>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary">Сохранить</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->