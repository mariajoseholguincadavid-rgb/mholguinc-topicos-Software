@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["title"])
@section('content')
<div class="card">
  <div class="card-body">
    @if ($errors->any())
      <ul class="alert alert-danger list-unstyled">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    <form method="POST" action="{{ route('product.save') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label">Name:</label>
        <input name="name" value="{{ old('name') }}" type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Price:</label>
        <input name="price" value="{{ old('price') }}" type="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
</div>
@endsection