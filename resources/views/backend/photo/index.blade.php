@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">image Post</Span>
                    @if (empty($image))
                    <a href="/image/create" class="float-end btn btn-info">Add image</a>

                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Gallery</th>
                                <th>Historical</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                           @if (!empty($image))
                           <tr>
                            <td>{{ $image->gpic }}</td>
                            <td>{{ $image->hpic }}</td>

                            <td>


                           <form action="/image/{{ $image->id }}" method="post">
                            @csrf
                            @method('delete')

                            <a href="/image/{{ $image->id }}/edit" class=" btn badge bg-info p-1">Edit</a>
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
