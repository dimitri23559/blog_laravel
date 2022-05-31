@extends('layouts.main')

@section('judul')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">register</h1>
            <form>
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="name">
                <label for="name">name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="username">
                <label for="username">username</label>
            </div>
          
            
                
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">register</button>
              <small class="d-block text-center mt-3">have account?<a href="/login">login Now</a></small>
            </form>
          </main>
        
    </div>
</div>

@endsection