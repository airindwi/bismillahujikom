@extends('layout')
@section('content')
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Add User</h5>

      <!-- Vertical Form -->
      <form action="" method="POST" class="row g-3">
        @csrf
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Full Name</label>
          <input type="text" name="name" class="form-control" id="inputNanme4">
        </div>
        <div class="col-sm-6">
            <label class="col-sm-2 col-form-label">Role</label>
          <select class="form-select" name="role" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
            <option value="user">User</option>

          </select>
        </div>
        <div class="col-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-6">
          <label for="inputPassword4" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="inputPassword4">
        </div>
        <div class="col-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputPassword4" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="inputPassword4">
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>

@endsection