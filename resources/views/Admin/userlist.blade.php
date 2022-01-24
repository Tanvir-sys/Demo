@extends('layouts.app')
@extends('layouts.dashboard')
@section('content')
    <main>
        <div class="container">
            <h1 class="mt-4">List Of notice</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">List Of Notice</li>
            </ol>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @if (count($notices)>0)
                    @foreach ($notices as $notice)
                        <tr>
                        <th scope="row">{{$notice->id}}</th>

                            <td>{{$notice->title}}</td>
                            <td>{{Str::limit(strip_tags($notice->description),50)}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-2">
                                    <a href="{{route('Notice.edit',$notice->id)}}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-2"></div>
                                <form action="{{route('Notice.delete', $notice->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" name="submit" value="Delete" >
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endif --}}


                </tbody>
              </table>
    </main>


@endsection
