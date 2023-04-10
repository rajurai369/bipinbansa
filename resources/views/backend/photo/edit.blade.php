@extends('backend.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <Span class="fs-4 fw-bold">Edit</Span>
                        <a href="/photo" class="float-end btn btn-info">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="/photo/{{ $photo->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')




                            <div class="form-group">
                                <label for="hpic">Gallery</label>
                                <input id="gpic" class="form-control" type="file" name="gpic"
                                    value="{{ $photo->gpic }}" name="photos[]" multiple>
                            </div>
                            <div>
                                <h6>Previous Image</h6>
                                <img src="{{asset($photo->gpic)}}" width="200" alt="">
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
