@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration F orm</h1>
            <form action="/register" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror required" rounded-top id="name" placeholder="Name" value="{{old('name')}}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username " placeholder="Username" value="{{old('username')}}" required>
                <label for="username">UserName</label>
                @error('username')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="email" value="{{old('email')}}" required>
                <label fo r="email">email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="form-floating" rounded-bottom>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " id="password" placeholder="password" required>
                <label for="password">password</label>
                @error('password')
                {{$message}}
                @enderror
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
