@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">post Post</Span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/post" method="post" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title" >
                      </div>


                      <div class="form-group">
                        <label for="notice">Notice</label>
                        <input id="notice" class="form-control" type="text" name="notice" >
                      </div>

                      <div class="form-group">
                        <label for="phone">phone</label>
                        <input id="phone" class="form-control" type="phone" name="phone" >
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
