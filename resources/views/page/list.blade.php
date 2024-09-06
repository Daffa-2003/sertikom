@extends('layout.index ')

@section('content')
    <h1>Page List</h1>
    {{-- <button class="">
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </button> --}}
    <a href="{{ route('create') }}" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @if ($data->isEmpty())
                <tr>
                    <td colspan="4" class="text-center">Data Kosong</td>
                </tr>
            @else
                @foreach ($data as $item)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                            <a href="{{ route('show', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
