@extends('layouts.app')

@section('content')



<body>
  @if(auth()->user()->is_admin)

    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link active" aria-current="page"
                            href="./admin_manage_users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
                            </svg>
                            Manage Users
                        </a>
                </ul>         
                <div class="col">
                    <br></br>
                    <br></br>
                    <a href="../logout">
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                        class="btn btn-primary btn-lg">Logout </button></a>
                </div>

            </div>
            <div class="col-lg-10">
                <h3>Manage Users</h3>
                <br>
                <div class="container-fluid">
                    <form class="d-flex">

                        <button style="border-color: white; background-color: #571f70; color: white" type="button"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddAdministrator">
                            Add new Administrator
                        </button>

                        <button style="border-color: white; background-color: #571f70; color: white" type="button"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddUser">
                            Add new User
                        </button>
                        <a href="admin_manage_users">
                          <button class="btn btn-primary btn-lg" style="font-size:15px; float:right; border-color: white; background-color: #571f70; color: white"
                           type="button" name="button">Clear Search
                          </button>
                        </a>

                    </form>

                    <br>
                    <form action="{{route('searchUser')}}" method="post">
                      {{ csrf_field() }}
                    <input type="text" name="search" placeholder="Search email..." autocomplete="off"/>
                    </form>
                </div>
                <div class="card" style="border-color: #571f70; background-color: #d9aded; color: 571f70">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label for="name" class="form-label">Name </label>
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Email </label>
                            </div>
                            <!--
                            <div class="col">
                                <label for="Phone Number" class="form-label">Phone Number </label>
                            </div>
                            <div class="col">
                                <label for="NIF" class="form-label">NIF </label>
                            </div>
                            <div class="col">
                                <label for="Address" class="form-label">Address </label>
                            </div>
                            <div class="col">
                                <label for="City" class="form-label">City </label>
                            </div>
                            -->
                            <div class="col">
                                <label for="Country" class="form-label">Country </label>
                            </div>
                        </div>

                        <!-- Visuals -->
                        <?php sort($users) ?>
                        <?php foreach ($users as $user): ?>
			            <?php if (!$user['is_admin']): ?>
                            <div style="height:140px;"class="card" style="border-color: #d9aded" id="user-{{$user['id']}}">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        
                                        <div class="col">
                                            <p>{{$user['name']}}</p>
                                        </div>
                                        <div class="col">
                                            <p>{{$user['email']}}</p>
                                        </div>
                                        <!--
                                        <div class="col">
                                            <p>{{$user['phone_number']}}</p>
                                        </div>
                                        <div class="col">
                                            <p>{{$user['nif']}}</p>
                                        </div>
                                        <div class="col">
                                            <p>{{$user['address']}}</p>
                                        </div>
                                        <div class="col">
                                            <p>{{$user['city']}}</p>
                                        </div>
                                        -->
                                        <div class="col">
                                            <p>{{$user['country']}}</p>
                                        </div>
                                
                                        <div>
                                            <button style="border-color: white; background-color: #A82A2D; color: white" type="button"
                                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete-{{$user['id']}}">
                                                Delete User
                                            </button>
                                        
                                            <?php if (!$user['is_blocked']): ?>
                                                <button style="border-color: white; background-color: #9d03a6; color: white" type="button"
                                                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ToggleBlock-{{$user['id']}}">
                                                    Block User
                                                </button>
                                            
                                                <?php else: ?>    
                                                <button style="border-color: white; background-color: #46074a; color: white" type="button"
                                                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ToggleBlock-{{$user['id']}}">
                                                    Unblock User
                                                </button>
                                            
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ----- Functions ----- -->
                            <div class="modal fade" id="Delete-{{$user['id']}}" tabindex="-1" aria-labelledby="DeleteProduct" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteProduct">Delete {{$user['name']}}</h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want permenantly delete {{$user['name']}}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                            <a href="{{ route('users.delete', $user['id'] )}}">
                                            <a user-id="{{$user['id']}}" class="button white-text user-remove-button">NEWDELETE</a>
                                            <!--<button style="border-color: #A82A2D; background-color: #A82A2D; color: white"
                                                type="submit" class="btn btn-primary">DELETE</button></a>-->

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="ToggleBlock-{{$user['id']}}" tabindex="-1" aria-labelledby="ToggleBlock" aria-hidden="true">
                                
                            <!-- Block and Unblock -->                            
                            <?php if ($user['is_blocked']): ?>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ToggleBlock">Unblock {{$user['name']}}</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to unblock {{$user['name']}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="{{ route('users.toggleBlock', $user['id'] )}}">
                                                <button style="border-color: #46074a; background-color: #46074a; color: white"
                                                    type="submit" class="btn btn-primary">Unblock</button></a>

                                                
                                            </div>
                                        </div>
                                    </div>

                                <?php else: ?>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ToggleBlock">Block {{$user['name']}}</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to block {{$user['name']}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="{{ route('users.toggleBlock', $user['id'] )}}">
                                                <button style="border-color: #9d03a6; background-color: #9d03a6; color: white"
                                                    type="submit" class="btn btn-primary">Block</button></a>

                                                
                                            </div>
                                        </div>
                                    </div>
                            <?php endif; ?>
                            </div>

			            <?php endif; ?>
                        <?php endforeach; ?>



                    </div>
                </div>






                <div class="modal fade" id="AddAdministrator" tabindex="-1" aria-labelledby="AddNewAdmin"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddNewAdmin">Add New Administrator</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="admin_manage_users/addAdministrator">
                                {{ csrf_field()}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="name" class="form-control" id="name" name="name"
                                            placeholder="John Doe" aria-describedby="nameHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="example@gmail.com" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder=".........">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    type="submit" class="btn btn-primary">ADD</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>





                <div class="modal fade" id="AddUser" tabindex="-1" aria-labelledby="AddNewUser" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddNewUser">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="admin_manage_users/addUser">
                                  {{ csrf_field()}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="name" class="form-control" id="name" name="name"
                                            placeholder="John Doe" aria-describedby="nameHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="example@gmail.com" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder=".........">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Phone number </label>
                                        <input type="text" class="form-control" id="phone_number" placeholder="example" name="phone_number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nif" class="form-label">NIF </label>
                                        <input type="text" class="form-control" id="nif" placeholder="nif" name="nif">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address </label>
                                        <input type="text" class="form-control" id="address" placeholder="example" name="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City </label>
                                        <input type="text" class="form-control" id="city" placeholder="example" name="city">
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country </label>
                                        <input type="text" class="form-control" id="country" placeholder="example" name="country">
                                    </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    type="submit" class="btn btn-primary">ADD</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                



            </div>
        </div>
    </div>

    @else
    <meta http-equiv="refresh" content="0; URL='catalog'"/>
    @endif

    @endsection
