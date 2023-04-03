@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">Edit</Span>
                    <a href="/tasbir" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/tasbir/{{ $tasbir->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                      <div class="form-group">
                        <label for="subject">Historical tasbir</label>
                        <input id="subject" class="form-control" type="file" name="subject" value="{{ $tasbir->subject }}" >
                      </div>


                      <div class="form-group">
                        <label for="tasbir">Gallery</label>
                        <input id="tasbir" class="form-control" type="file" name="tasbir" value="{{ $tasbir->tasbir }}" >
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
