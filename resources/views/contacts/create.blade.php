@extends('layouts.default', ['title' => 'Contact'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-4 ml-auto mr-auto">
                <h1>Get In Touch</h1>
                <p class="text-muted">If you having trouble with servicen, please <a href="mailto:yemeliserge6@gmail.com"> ask for help.</a></p>

                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only"></label>
                        <textarea id="message" name="message" rows="10" cols="10" class="form-control" required="required"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">&laquo; Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <br>
    <br>








@stop
