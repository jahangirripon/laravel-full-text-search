@extends('welcome')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Full Text Search Box</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('search/') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Enter search text</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="text" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <h1>All Blogs</h1>
    </div>


    <div class="row justify-content-center">
        @foreach($posts as $post)
            <h3>{{ $post->title }}</h3>
            <hr>
            <p>
                {{ $post->body }}
            </p>
            <br>
        @endforeach
    </div>
</div>
@endsection
