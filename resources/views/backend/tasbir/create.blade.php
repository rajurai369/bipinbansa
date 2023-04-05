@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">tasbir Post</Span>
                    <a href="/tasbir" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/tasbir" method="post" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="subject">Historical subject</label>
                        <input id="subject" class="form-control" type="text" name="subject" >
                      </div>


                      <div class="form-group">
                        <label for="tasbir">Gallery</label>
                        <input id="tasbir" class="form-control" type="file" name="tasbir" name="images[]" multiple >
                      </div>


         <button type="submit" class="btn btn-info">Submit

         </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
