@extends('layout.index ')

@section('content')
    <form action="{{ route('edit', $data->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="input" class="form-control" name="title" id="title" placeholder="title"
                value="{{ $data->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <textarea class="form-control" name="content" id="content" rows="3" required>{{ $data->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
