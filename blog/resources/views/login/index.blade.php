@extends('layouts.main')

@section('judul')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form>
          
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
              <small class="d-block text-center mt-3">not registered?<a href="/register">register Now</a></small>
            </form>
          </main>
        
    </div>
</div>

@endsection