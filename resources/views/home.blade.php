@extends('layouts.app')

@section('htmlheader_title')

@endsection

@section('main-content')
    <h3>Benvingut</h3>
    {{csrf_field()}}
    <form action="/logout" method="GET">
        <div class="row text-center">
            <input type="submit" value="Logout" class="btn btn-primary" name="logout">
        </div>
    </form>
@endsection