@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="/reviews/create">Create</a><br><br><br>

            <ul>
                @foreach($reviews as $review)
                <li><pre>{{ json_encode($review, JSON_PRETTY_PRINT) }}</pre></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
