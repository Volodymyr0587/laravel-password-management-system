@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            Dashboard

            <div class="mt-4">
                Hello {{ auth()->user()->username }}. You are store 6 paswords at last week.
                <p>Passwords was ceated for: </p>
                @foreach (['Google', 'Spotify', 'JetBrains'] as $password)
                    <p>{{ $password }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
