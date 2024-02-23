@extends('frontend.layout.master')
@section('title','login')
@section('content')
  
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
              </div> <br>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <button type="submit" class="btn btn-primary btn-block">Forget Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection