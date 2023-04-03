@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">File Post</Span>
                    @if (empty($file))
                    <a href="/file/create" class="float-end btn btn-info">Add File</a>

                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Mundhum_File</th>
                                <th>Bansa_file</th>
                                <th>Helper_file</th>
                                <th>Mantab_file</th>


                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                           @if (!empty($file))
                           <tr>
                            <td>{{ $file->mundhum_file }}</td>
                            <td>{{ $file->bansa_file }}</td>
                            <td>{{ $file->mantab_file }}</td>
                            <td>{{ $file->helper_file }}</td>

                            <td>


                           <form action="/file/{{ $file->id }}" method="post">
                            @csrf
                            @method('delete')

                            <a href="/file/{{ $file->id }}/edit" class=" btn badge bg-info p-1">Edit</a>
                            <button type="submit" class=" btn badge bg-danger p-1 ">Delete</button>
                           </form>
                            </td>
                        </tr>

                           @endif
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
