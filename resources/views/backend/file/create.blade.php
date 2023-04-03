@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">File Post</Span>
                    <a href="/file" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/file" method="post" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="mundhum_file">Mundhum_file</label>
                        <input id="mundhum_file" class="form-control" type="file" name="mundhum_file" >
                      </div>


                      <div class="form-group">
                        <label for="bansa_File">Bansa_file</label>
                        <input id="bansa_File" class="form-control" type="file" name="bansa_file" >
                      </div>

                      <div class="form-group">
                        <label for="helper_file">Helper_file</label>
                        <input id="helper_file" class="form-control" type="file" name="helper_file" >
                      </div>

                      <div class="form-group">
                        <label for="mantab_file">Mantab_file</label>
                        <input id="mantab_file" class="form-control" type="file" name="mantab_file" >
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
