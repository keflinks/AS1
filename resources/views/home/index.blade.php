@extends('layouts.app')
@section('title')
    Registrtions
@endsection
@section('content')
    <div class="container-xl py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-4">
            @foreach($registrations as $registration)
                <div class="col">
                    @include('app.car')
                </div>
            @endforeach
        </div>
        {{ $registrations->links() }}
    </div>
@endsection