@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">Edit</Span>
                    <a href="/image" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/image/{{ $image->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                      <div class="form-group">
                        <label for="gpic">Historical image</label>
                        <input id="gpic" class="form-control" type="file" name="gpic" value="{{ $image->gpic }}" >
                      </div>


                      <div class="form-group">
                        <label for="hpic">Gallery</label>
                        <input id="hpic" class="form-control" type="file" name="hpic" value="{{ $hpic->image }}" >
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
