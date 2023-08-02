@extends('layouts.app')

@section('content')
    <div class="flex justify-center">

        <div class="w-10/12 bg-white p-6 rounded-lg">
            <div>
                <a href="{{ route('create') }}" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">
                    Create
                </a>

                <div class="mt-2">Total records: {{ auth()->user()->passwords->count() }}</div>
            </div>
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Resource (website, app, etc)</th>
                                    <th scope="col" class="px-6 py-4">Login</th>
                                    <th scope="col" class="px-6 py-4">Password</th>
                                    <th scope="col" class="px-6 py-4">Info</th>
                                    <th scope="col" class="px-6 py-4"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($passwords->count())

                                @foreach ($passwords as $password)
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $password->resource }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $password->login }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $password->password }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $password->additional_info }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <form action="{{ route('passwords.destroy', $password) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-4 py-3 rounded font-medium"
                                                            onclick="return confirm('{{ __('Are you sure you want to delete the entry?') }}')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                @else
                                    <p>No records yet.</p>
                                @endif
                            </tbody>
                        </table>
                        {{ $passwords->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
