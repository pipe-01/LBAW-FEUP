@extends('layouts.app')

@section('content')
<div class="py-5 container">
  <div class="row">
    <div class="col-lg-2">
      <ul class="nav flex-column nav-fill">
        <li class="nav-item" style="margin-bottom: 2rem">
          <span style="align-self:center; font-size:1.2rem"> Profile Area </span>
        </li>
        <li class="nav-item">
          <a style="color: #637CFF" class="nav-link active" aria-current="page" href="/myprofile">Personal Information</a>
        </li>
        <li class="nav-item">
          <a style="color: #2B4DFF" class="nav-link" href="../myprofile/account_data"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" /></svg>
              Account Data</a>
        </li>
        <li class="nav-item">
          <a style="color: #637CFF" class="nav-link" href="../myprofile/myorders">My Orders</a>
        </li>
      </ul>
    </div>
    <div class="col-lg-10">
      <div class="registration-container">
        <div class="personal-container">
          <div style="align-self: center; margin-top: 1rem">
            <span style="font-size: 1.5rem"> Update Account Information </span>
          </div>
        <div style="margin-top: 3rem;">
          <form method="post" action="submitAccountData">
            {{ csrf_field()}}
            <div class="d-flex flex-column">
              <label for="name" style="margin-bottom: 1rem; color: #686868">E-mail</label>
              <input type="register_text" id="email" name="email" value="{{session()->get('userinfo')['email'] ?? ''}}">
              <label for="name" style="margin-top: 2rem;color: #686868">Password</label>
              <input type="password" id="password" name="password"  onfocus="this.value=''" value="**********">
              <div class="d-grip gap-2 d-md-flex justify-content-md-center" style="margin-top: 2rem;">
                <button style="border-color: #637CFF; background-color: #637CFF; color: white" type="submit" class="btn btn-primary">SUBMIT</button>
              </div>
            </div>
          </form>
          @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif
          @if (session('alert'))
          <div class="alert alert-danger">
            {{ session('alert') }}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection