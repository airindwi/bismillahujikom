@extends('layout')
@section('content')


<div class="card">
    <div class="card-body">
      <h5 class="card-title">Book</h5>

      <!-- Vertical Form -->
      <form action="" method="POST" class="row g-3" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Judul</label>
          <input type="text" name="title" class="form-control" id="inputNanme4">
        </div>
        <div class="col-sm-6">
            <label class="col-sm-2 col-form-label">Category</label>
          <select class="form-select" name="category_id" aria-label="Default select example">
            <option selected>Open this select menu</option>

            <option value=""></option>
          </select>
        </div>
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Penulis</label>
          <input type="text" name="author" class="form-control" id="inputEmail4">
        </div>
        <div class="col-6">
          <label for="inputPassword4" class="form-label">Penerbit</label>
          <input type="text" name="publisher" class="form-control" id="inputPassword4">
        </div>
        <div class="col-6">
            <label for="inputPassword4" class="form-label">Year</label>
            <input type="number" name="year" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
          <label for="cover" class="form-label">Cover</label>
          <input type="file" name="cover" class="form-control" id="inputNanme4">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>

@endsection