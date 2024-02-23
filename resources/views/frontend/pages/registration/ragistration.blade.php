@extends('frontend.layout.master')
@section('title','registration')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Registration</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf
            
              <div>
                  <label for="name">Name</label><input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                  {{-- <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus> --}}
              </div>
            
              <div>
                  <label for="email">Email</label>
                  <input id="email" type="email" name="email" value="{{ old('email') }}" required>
              </div>
            
              <div>
                  <label for="phone">Phone Number</label>
                  <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required>
              </div>
            
              <div>
                  <label for="password">Password</label>
                  <input id="password" type="password" name="password" required autocomplete="new-password">
              </div>
            
              <div>
                  <label for="password-confirm">Confirm Password</label>
                  <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
              </div>
            
              <button type="submit">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection