@extends('layout.master')

@section('title', 'Update Item Page')

@section('content')

@include('components.navbar')

<form class="p-5 w-50" method="POST" action="{{ route('update.item', $item->id) }}">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Item Name</label>
    <input type="text" class="form-control" name="name" value="{{ $item->name }}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Item Description</label>
    <input type="text" class="form-control" name="description" value="{{ $item->description }}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Item Stock</label>
    <input type="number" class="form-control" name="stock" value="{{ $item->stock }}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection