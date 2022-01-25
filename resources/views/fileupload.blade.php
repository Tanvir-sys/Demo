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

                    <form action="{{route('create')}}" method="post" enctype="">
                        @csrf
                        <div class="form-group">
                          <label for="Name">File Name</label>
                          <input type="text" name ="name" class="form-control-file" id="name">
                        </div>
                        <div>
                          <label for="fileUpload">Upload Your File</label>
                          <input type="file" class="form-control-file" id="file" name="file">
                          <input type="submit" class="btn btn-success" name="submit">
                        </div>
                      </form>





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
