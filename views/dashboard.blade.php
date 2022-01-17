@extends('app')

@section('content')

<div class="position-absolute top-10 start-50 translate-middle">
<p>Welcome to the book review forum!</p>

</div>


<form class= "col-3 position-absolute top-50 start-50 translate-middle">
<p class="fw-bold fs-2 ">Login</p>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
    <ul class="nav">
  <li class="nav-item mx-auto">
    <a class="nav-link active" aria-current="page" href="#">Forgot your passsword?</a>
  </li>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>



@endsection('content')