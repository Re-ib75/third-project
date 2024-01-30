@extends('layouts.app')

@section('title','Homepage')

@section('content')

    <div class="title m-b-md">
        Laravel
    </div>
@endsection

'''''''''''''''''web
use App\Http\Controllers\PagesController;
Route::get('/', 'PagesController@getIndex');

