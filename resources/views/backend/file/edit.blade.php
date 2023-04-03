@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">Edit</Span>
                    <a href="/file" class="float-end btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    <form action="/file/{{ $file->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                      <div class="form-group">
                        <label for="mundhum_file">Mundhum_file</label>
                        <input id="mundhum_file" class="form-control" type="file" name="mundhum_file" value="{{ $file->mundhum_file }}" >
                      </div>


                      <div class="form-group">
                        <label for="bansa_file">Bansa_file</label>
                        <input id="bansa_file" class="form-control" type="file" name="bansa_file" value="{{ $file->bansa_file }}" >
                      </div>

                      <div class="form-group">
                        <label for="helper_file">Helper_file</label>
                        <input id="helper_file" class="form-control" type="file" name="helper_file" value="{{ $file->helper_file }}" >
                      </div>
                      <div class="form-group">
                        <label for="mantab_file">Mantab_file</label>
                        <input id="mantab_file" class="form-control" type="file" name="mantab_file" value="{{ $file->mantab_file }}" >
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
