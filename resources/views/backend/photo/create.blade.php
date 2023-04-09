@extends('backend.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <Span class="fs-4 fw-bold">photo Post</Span>
                        <a href="/photo" class="float-end btn btn-info">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="/photo" method="post" enctype="multipart/form-data">
                            @csrf




                            <div class="form-group">
                                <label for="gpic">Gallery</label>
                                <input id="gpic" class="form-control" type="file" name="gpic" multiple>
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
