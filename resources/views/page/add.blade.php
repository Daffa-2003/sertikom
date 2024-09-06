@extends('layout.index ')

@section('content')
    <form action="{{ route('coba') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="input" class="form-control" name="title" id="title" placeholder="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <textarea class="form-control" name="content" id="content" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
