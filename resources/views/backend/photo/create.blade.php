@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">image Post</Span>
                    <a href="/image" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/image" method="post" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="gpic">Historical gpic</label>
                        <input id="gpic" class="form-control" type="file" name="gpic" >
                      </div>


                      <div class="form-group">
                        <label for="hpic">Gallery</label>
                        <input id="hpic" class="form-control" type="file" name="hpic" >
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
