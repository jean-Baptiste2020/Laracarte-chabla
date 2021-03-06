@extends('layouts.default', ['title'=>'About'])



@section('content')
<div class="container">
    <h2>What is {{config('app.name')}}?</h2>
    <p> {{config('app.name')}} is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a> </p>

    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>This app has been built by <a href="https://www.youtube.com/channel/UC5_aWNZJECyegjR2vZnx0BQ">@chabla</a> for learning purposes</strong>
            </p>
        </div>

        <p>Feel free to help to improve the
            <a href="https://github.com/jean-Baptiste2020/Laracarte-chabla">
                <>source code.
            </a>
        </p>

        <hr>

        <h2>What is Laramap</h2>

        <p>Laramap is the website by which {{config('app.name')}} was inspired :).</p>

        <p>More info <a href="https://laramap.com/p/about"> here.</a></p>

        <hr>

        <h2>Which tools and services are used in Lracarte?</h2>

        <p>assically it's built on laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandril</li>
            <li>Google Maps</li>
            <li>Gravitar</li>
            <li>Antony Martin's Geolocalisations Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
</div>
@endsection