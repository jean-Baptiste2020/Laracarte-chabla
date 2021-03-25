@extends('layouts.default', ['title'=>'About'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>Get In Touch</h2>
            <p class="text-muted">if you having trouble with this services, please <a href="mailto:Chablamedia@gmail.com">ask for help.</a> </p>

            <form action="#" method="POST" class="form-well">

                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="mail" class="control-label">Email</label>
                    <input type="email" name="email" id="mail" class="form-control" required="required">
                </div>

                <div class="form-group" style="margin-top: 1.5em;">
                    <label for="mes" class="control-label sr-only">Message</label>
                    <textarea name="message" id="mes" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group" style="margin-top: 1em;">
                    <button type="submit" class="btn btn-primary btn-block" style="width: 100%;"> Submit Enquiry &raquo;</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection