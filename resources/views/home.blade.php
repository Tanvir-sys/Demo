@extends('layouts.userl')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User-Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>

                            <th scope="col">File Name</th>
                            <th scope="col">File</th>
                            <th scope="col">Time</th>

                          </tr>
                        </thead>
                        <tbody>
                            @if (count($files)>0)
                             @foreach ($files as $file)
                                <tr>
                                <th scope="row">{{ $file->name }}</th>

                                    <td>{{$file->file}}</td>
                                    <td>{{$file->created_at}}</td>

                                    <td>
                                        <div class="row">
                                            <div class="col-sm-2">
                                            <a href="{{route('fileview',$file->id)}}" class="btn btn-primary">Group</a>
                                            </div>


                                        </div>

                                    </td>
                                </tr>




                            @endforeach




                         @endif



                        </tbody>


                      </table>
                      <div class="container"><button class="btn btn-link">{{$files->links('pagination::bootstrap-4')}}</button></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
