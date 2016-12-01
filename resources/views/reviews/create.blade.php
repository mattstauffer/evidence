@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Add a review</h1>

            @include('partials.errors')

            <form action="/reviews" method="POST">
                {{ csrf_field() }}
                <label for="reviewee">Thing being reviewed</label>
                <select name="reviewee">
                    @foreach ($reviewees as $reviewee)
                    <option value="{{ $reviewee->id }}">{{ $reviewee->name }}</option>
                    @endforeach
                </select><br><br>

                <label for="title">Title</label>
                <input type="text" name="title"><br><br>

                <label for="source">Source (Amazon, O'Reilly, etc.)</label>
                <input type="text" name="source"><br><br>

                <label for="link">Link</label>
                <input type="text" name="link"><br><br>

                <label for="link">Author</label>
                <input type="text" name="author"><br><br>

                <label for="link">Text</label>
                <textarea name="text"></textarea><br><br>

                <label for="link">Type</label>
                <select name="type">
                    <option value="tweet">Tweet</option>
                    <option value="review">Review</option>
                    <option value="link">Link</option>
                    <option value="quote">Quote</option>
                </select><br><br>

                <input type="submit" value="Add">
            </form>
        </div>
    </div>
</div>
@endsection
