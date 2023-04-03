@extends('backend.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <Span class="fs-4 fw-bold">tasbir Post</Span>
                    @if (empty($tasbir))
                    <a href="/tasbir/create" class="float-end btn btn-info">Add tasbir</a>

                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Tasbir</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                           @if (!empty($tasbir))
                           <tr>
                            <td>{{ $tasbir->subject }}</td>
                            <td>{{ $tasbir->tasbir }}</td>

                            <td>


                           <form action="/tasbir/{{ $tasbir->id }}" method="post">
                            @csrf
                            @method('delete')

                            <a href="/tasbir/{{ $tasbir->id }}/edit" class=" btn badge bg-info p-1">Edit</a>
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
