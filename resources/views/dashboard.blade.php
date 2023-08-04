@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">


            <div class="mt-4">
                Hello {{ auth()->user()->username }}. You are store
                <b>{{ auth()->user()->passwords->where('created_at', '>=', now()->subDays(7))->count() }}</b> paswords at
                last week.
                <p class="mt-4">Passwords were created for: </p>

                <table class="m-4">
                    <tbody>
                        @foreach (auth()->user()->passwords as $password)
                            <tr>
                                <td>{{ $password->resource }}</td>
                                <td class="text-gray-600 text-sm px-10">Created {{ $password->created_at->diffForHumans() }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-flash />
@endsection
