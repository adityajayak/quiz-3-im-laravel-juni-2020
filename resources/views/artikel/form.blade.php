@extends('artikel.welcome')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Artikel Add</h2>
                    <form action="/artikel" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Judul">id_artikel</label>
                            <input type="text" class="form-control" name="id_artikel" >
                        </div>
                        <div class="form-group">
                            <label >judul</label>
                            <input type="text" class="form-control" name="judul" >
                        </div>
                        <div class="form-group">
                            <label >Isi</label>
                            <textarea id="isi" class="form-control" name="isi"  onkeyup="createslug()"></textarea>
                        </div>
                        <div class="form-group">
                            <label >slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" >
                        </div>
                        <div class="form-group">
                            <label >tag</label>
                            <input type="text" class="form-control" name="tag"  >
                        </div>
                        <div class="form-group">
                            <label >id_user</label>
                            <input type="text" class="form-control" name="id_user"  >
                        </div>
                        <input type="submit" value="submit" class="btn btn-primary my-1" />
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script>
            function createslug()
            {
                var judul = $('#isi').val();
                $('#slug').val(slugify(judul));
            }
            function slugify(text)
            {
                return text.toString().toLowerCase()
                        .replace(/\s+/g, '-')           // Replace spaces with -
                        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                        .replace(/^-+/, '')             // Trim - from start of text
                        .replace(/-+$/, '');            // Trim - from end of text
            }
        </script>
@endsection