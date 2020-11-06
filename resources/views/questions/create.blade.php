@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Ask Questions</h2>
                            <div class="ml-auto">
                                <a class="btn btn-outline-secondary"
                                   href="{{ route('questions.index') }}">All Questions</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('questions.store') }}">
                            <div class="form-group">
                                <label for="question-title">Question Title</label>
                                <input type="text" name="title" id="Question-title"
                                       class="form-control mb-2">

                                <label for="question-body">Question Body</label>
                                <textarea id="question-body" class="form-control mb-2" name="body" rows="4"></textarea>

                                <button class="btn btn-outline-primary" type="submit">Submit</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
