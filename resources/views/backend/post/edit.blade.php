@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">Edit</Span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/post/{{ $post->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                      <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title" value="{{ $post->hpic }}" >
                      </div>


                      <div class="form-group">
                        <label for="notice">Notice</label>
                        <input id="notice" class="form-control" type="file" name="notice" value="{{ $post->gpic }}" >
                      </div>

                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" class="form-control" type="text" name="phone" value="{{ $post->gpic }}" >
                      </div>


         <button type="submit" class="btn btn-info">Update

         </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
