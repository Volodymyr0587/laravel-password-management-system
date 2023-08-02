@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">


            <div class="mt-4">
                Hello {{ auth()->user()->username }}. You are store <b>{{ auth()->user()->passwords->where('created_at', '>=', now()->subDays(7))->count() }}</b> paswords at last week.
                <p class="mt-4">Passwords were created for: </p>
                @foreach (auth()->user()->passwords->pluck('resource')->unique() as $resource)
                    <p class="m-4">{{ $resource }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
