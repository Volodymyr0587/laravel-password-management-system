@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">

            <div class="m-4">
                <a href="{{ route('passwords') }}" class="text-blue-500 text-lg font-semibold hover:underline">
                    Back
                </a>
            </div>

            <form action="{{ route('passwords') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <p class="p-2 text-yellow-400">Resourse</p>
                    <label for="resource" class="sr-only">Resource</label>
                    <input type="text" name="resource" id="resource" placeholder="Website name, application etc"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('resource')
                    border-red-500 @enderror"
                        value="{{ old('resource') }}">

                    @error('resource')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <p class="p-2 text-yellow-400">Login</p>
                    <label for="login" class="sr-only">Login</label>
                    <input type="text" name="login" id="login" placeholder="Login to resource"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('login')
                    border-red-500 @enderror"
                        value="{{ old('login') }}">

                    @error('login')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <p class="p-2 text-yellow-400">Password</p>
                    <label for="password_to_resource" class="sr-only">Password</label>
                    <input type="text" name="password_to_resource" id="password_to_resource"
                        placeholder="Password to resource"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_to_resource')
                    border-red-500 @enderror"
                        value="{{ old('password_to_resource') }}">

                    @error('password_to_resource')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <p class="p-2 text-yellow-400">Information</p>
                    <label for="additional_info" class="sr-only">additional_info</label>
                    <textarea name="additional_info" id="additional_info" cols="30" rows="4" placeholder="Additional information"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('additional_info')
                    border-red-500 @enderror"
                        value="{{ old('additional_info') }}"></textarea>

                    @error('additional_info')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-1/2">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
