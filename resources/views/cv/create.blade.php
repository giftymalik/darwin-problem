@extends('layouts/app')

@section('title', 'Upload new CV')

@section('content')
<div class="form">  
    <form method="POST">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <fieldset>
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>
            <label for="lastname">First Name</label>
            <input type="text" id="lastname" name="lastname" required>
            <label for="mobile">First Name</label>
            <input type="text" id="mobile" name="mobile" required>
            <label for="cv">CV File</label>
            <input type="file" id="name" value="name" required>
            <input class="button-primary" value="Send" type="submit">
        </fieldset>
    </form>
</div>
@endsection