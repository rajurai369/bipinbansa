@extends('backend.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <Span class="fs-4 fw-bold">photo Post</Span>
                        @if (empty($photo))
                            <a href="/photo/create" class="float-end btn btn-info">Add photo</a>
                        @endif
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Gallery</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @if (!empty($photo))
                                    <tr>
                                        <td>{{ $photo->gpic }}</td>

                                        <td>


                                            <form action="/photo/{{ $photo->id }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <a href="/photo/{{ $photo->id }}/edit"
                                                    class=" btn badge bg-info p-1">Edit</a>
                                                <button type="submit" class=" btn badge bg-danger p-1 ">Delete</button>
                                                <a href="photo/create"> <button type="submit"
                                                        class=" btn badge bg-primary p-1 ">Create</button>
                                                </a>
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
