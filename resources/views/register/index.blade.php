@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
              <div class="form-floating">
                <input type="text" name="name" class="form-control" rounded-top id="name" placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="username">UserName</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="email">
                <label for="email">email</label>
              </div>
              <div class="form-floating" rounded-bottom>
                <input type="password" name="password" class="form-control" id="password" placeholder="password">
                <label for="password">password</label>
              </div>

              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">
                Already Registered <a href="/login">Login</a>
            </small>
          </main>
    </div>
</div>



@endsection
