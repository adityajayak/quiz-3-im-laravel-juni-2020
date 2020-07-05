@extends('artikel.welcome')

@section('content')

<a href="create" class="btn btn-sm btn-info">Buat Artikel</a>

<table class="table">
  <tr>
    <th scope="col">id_artikel</th>
    <th scope="col">judul</th>
    <th scope="col">isi</th>
    <th scope="col">slug</th>
    <th scope="col">tag</th>
    <th scope="col">id_user</th>
  <th scope="col">Action</th>

  </tr>
  @foreach($artikel as $key => $artikel)
 <tr>
 <td>{{$artikel -> id_artikel }}</td>
 <td>{{$artikel->judul}}</td>
 <td>{{$artikel -> isi}}</td>

 <td>{{$artikel -> slug}}</td>
 <td>{{$artikel -> tag}}</td>
 <td>{{$artikel -> id_user}}</td>
 <td>
 <a href="/artikel/{{$item->id_artikel}}" class="btn btn-sm btn-info">show</a>
<a href="/artikel/{{$item->id_artikel}}/edit" class="btn btn-sm btn-warning">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
  <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
</svg>
</a>
<a href="/artikel/{{$item->id_artikel}}/delete" class="btn btn-sm btn-danger">
<i class='far fa-trash-alt' style='font-size:24px'></i>
</a>
 </td>
@endforeach 

 </table>

@endsection