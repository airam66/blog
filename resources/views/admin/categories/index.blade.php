@extends('admin.template.main')

@section('title','Lista de categorias')

@section('content')

<a href="{{route('categories.create')}}" class="btn btn-info">Registrar nueva categoria</a>


<table class="table table-striped">

  <thead>
  	<th>ID</th>
  	<th>Nombre</th>
  	<th>Accion</th>

  </thead>

  <tbody>

   @foreach($categories as $category)

   <tr>
   <td> {{ $category->id}}</td>
   <td> {{ $category->name}}</td>

     <td><a href="{{ route('categories.destroy', $category->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?)" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>

             <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
             </td>

@endforeach

	</tbody>

</table>

<div class="text-center">

  {!! $categories->links()!!}

</div>

@endsection