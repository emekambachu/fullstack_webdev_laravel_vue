@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>All Questions</h2>
                            <div class="ml-auto">
                                <a class="btn btn-outline-secondary"
                                   href="{{ route('questions.create') }}">Ask Question</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @foreach($questions as $question)
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{ $question->votes }}</strong>
                                    {{ Illuminate\Support\str::plural('vote'), $question->votes }}
                                </div>

                                <div class="status {{ $question->status }}">
                                    <strong>{{ $question->answers }}</strong>
                                    {{ Illuminate\Support\str::plural('answer'), $question->answers }}
                                </div>

                                <div class="view">
                                    {{ $question->views ." ". Illuminate\Support\str::plural('view'), $question->views }}
                                </div>
                            </div>

                                <div class="media-body">
                                    <h3 class="mt-0">
                                        <a href="{{ $question->url }}">
                                            {{ $question->title }}</a></h3>
                                    <p class="lead">
                                        {{ Illuminate\Support\str::limit($question->body, 250) }}
                                        Asked By<a href="{{ $question->user->url }}">
                                            {{ $question->user->name }}</a>
                                        <small class="text-muted">
                                            {{ $question->created_at->diffForHumans() }}</small>
                                    </p>
                                </div>
                        </div>
                        <hr>
                        @endforeach

                        <div class="text-center">
                            {{ $questions->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
