@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>

        <form action="{{ route('UserListupdatep',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="container">

                <div class="form-gorup col-md-4 mt-3">

                    <div class="mb-5" >
                        <label for="name"><h4>Name</h4></label>
                        <input type="text" class="form-control" id="" name="name" value="{{$user->name }}" >
                    </div>
                    <div class="mb-5" >
                        <label for="email"><h4>Email</h4></label>
                        <input type="email" class="form-control" id="" name="email" value="{{$user->email}}" >
                    </div>

                    <div class="container"><input type="Submit" name="update" class="btn btn-success mt-5"></div>
                </div>

            </div>

        </div>
    </form>
    </main>

@endsection
