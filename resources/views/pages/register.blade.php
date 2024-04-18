@extends('auth')
@section('content')
    
@if (Session::get('success'))
            <div class="alert alert-primary">
            <button type="button" class="btn-close btn-close-black float-end" data-bs-dismiss="alert"
                aria-label="Close"></button>
            {{ Session::get('success') }}
            </div>
            @endif
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register</h5>
                  </div>

                  <form action="" method="POST" >
                    @csrf                      
                    <div class="col-12">
                      <label for="yourName" class="form-label">Full Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="yourPassword" required>
                      </div>

                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      @endsection