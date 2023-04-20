@extends('layouts.app')
@section('content')

<div class="container py-5 d-flex justify-content-center">
    <button">
        <a class="btn btn-primary btn-lg" href="{{ route('projects.index') }}">
            LOAD MORE
        </a>
    </button>
</div>
@endsection