@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">Notice</Span>
                    @if (empty($post))
                    <a href="/post/create" class="float-end btn btn-info">Post notice</a>

                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Notice</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                           @if (!empty($post))
                           <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->notice }}</td>
                            <td>{{ $post->phone }}</td>

                            <td>


                           <form action="/post/{{ $post->id }}" method="post">
                            @csrf
                            @method('delete')

                            <a href="/post/{{ $post->id }}/edit" class=" btn badge bg-info p-1">Edit</a>
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
