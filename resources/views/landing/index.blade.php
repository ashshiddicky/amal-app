@extends('landing.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card-body">
                <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                <hr>
                <h4>{{ $post->title }}</h4>
                <p class="tmt-3">
                    {!! $post->content !!}
                </p>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card-body">
                @foreach($berita as $post)
                <div class="">
                    <a href="{{ route('landing.show', $post->id) }}">
                  <img src="{{ asset('/storage/posts/'.$post->image) }}" class="img-responsive" style="width:100%" alt="Image">
                  <div class="">
                    <p>{{ $post->title }}</p>
                  </div>
                </a>
                </div>
                @endforeach
                {{ $berita->links() }}

              </div>
        </div>
      </div>
</div>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $post->title }}</h4>
                        <p class="tmt-3">
                            {!! $post->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
 --}}
@endsection
