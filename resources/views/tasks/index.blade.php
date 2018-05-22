@extends('layouts.layout')
@section('content')

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello Guy!</h1>
            <p>Please find below the pending tasks attributed to you.</p>
            <p><a class="btn btn-secondary btn-lg" href="#" role="button">Add a task &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Task1</h2>
                <p>descriptiondescription description description description description.</p>
                <p><a class="btn btn-primary" href="#" role="button">Add Comment &raquo;</a></p>
                <p><a class="btn btn-success" href="#" role="button">Completed &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Task2</h2>
                <p>descriptiondescription description description description.</p>
                <p><a class="btn btn-primary" href="#" role="button">Add Comment &raquo;</a></p>
                <p><a class="btn btn-success" href="#" role="button">Mark as Completed &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Task3</h2>
                <p>descriptiondescription description description description descriptiondescription.</p>
                <p><a class="btn btn-primary" href="#" role="button">Add Comment &raquo;</a></p>
                <p><a class="btn btn-success" href="#" role="button">Mark as Completed &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Task4</h2>
                <p>descriptiondescription description description description descriptiondescription.</p>
                <p><a class="btn btn-primary" href="#" role="button">Add Comment &raquo;</a></p>
                <p><a class="btn btn-success" href="#" role="button">Mark as Completed &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Task5</h2>
                <p>descriptiondescription description description description descriptiondescription.</p>
                <p><a class="btn btn-primary" href="#" role="button">Add Comment &raquo;</a></p>
                <p><a class="btn btn-success" href="#" role="button">Mark as Completed &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

</main>

@endsection