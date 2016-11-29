@extends('layouts/app')

@section('title', 'Upload new CV')

@section('content')
<div class="errors">
    @foreach ($errors->all() as $error)
        <blockquote>{{ $error }}</blockquote>
    @endforeach
</div>
<div class="form">
    <form action="/cvs" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <fieldset>
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required>
            <label for="mobile">Mobile</label>
            <input type="text" id="mobile" name="mobile" required>
            <label for="cv">CV File</label>
            <input type="file" id="cv" name="cv" required>
            <input class="button-primary" value="Send" type="submit">
        </fieldset>
    </form>
</div>
@endsection