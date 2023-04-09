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
                                <input id="title" class="form-control" type="text" name="title"
                                    value="{{ $post->title }}">
                            </div>





                            <div class="form-group">
                                <label for="description">Description</label>
                                <input id="description" class="form-control" type="text" name="description"
                                    value="{{ $post->description }}">

                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control" type="file" name="image"
                                    value="{{ $post->image }}" name="images[]" multiple>
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
