@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1 class="mt-4">List Of Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=""></a></li>
                <li class="breadcrumb-item active">List Of Users</li>
            </ol>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>

            @endif
            <table class="table">
                <thead>
                  <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($users)>0)
                     @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{ $user->name }}</th>

                            <td>{{$user->email}}</td>
                            <td>{{$user->action}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-2">
                                    <a href="{{route('UserListupdate',$user->id)}}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-2">

                                        <form action="{{route('UserListdelete', $user->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" name="submit" value="Delete" >
                                        </form>

                                    </div>

                                </div>

                            </td>
                        </tr>




                    @endforeach




                 @endif



                </tbody>


              </table>
              <div class="container"><button class="btn btn-link">{{$users->links('pagination::bootstrap-4')}}</button></div>

    </main>


@endsection
