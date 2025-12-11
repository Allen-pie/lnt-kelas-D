@extends('layout.master')

@section('title', 'Add Item Page')

@section('content')

@include('components.navbar')

<form class="p-5 w-50" action="{{ route('add.item') }}" method="POST">
   @csrf
  <div class="mb-3">
    <label  class="form-label">Item Name</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="mb-3">
    <label class="form-label">Item Description</label>
    <input type="text" class="form-control" name="description">
  </div>

  <div class="mb-3">
    <label class="form-label">Item Stock</label>
    <input type="number" class="form-control" name="stock">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection