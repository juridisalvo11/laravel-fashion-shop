@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Type</th>
            <th scope="col">Size</th>
            <th scope="col">Colors</th>
            <th scope="col">Materials</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clothes_list as $clothe)
            <tr>
              <td>{{$clothe->ID}}</td>
              <td>{{$clothe->type}}</td>
              <td>{{$clothe->size}}</td>
              <td>{{$clothe->color}}</td>
              <td>{{$clothe->material}}</td>
              <td>{{$clothe->price}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
