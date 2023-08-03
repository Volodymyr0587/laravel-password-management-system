@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-2/5 bg-white p-6 rounded-lg">

            <form action="{{ route('userinfo') }}" method="post">
                @csrf
                {{-- @method('PUT') --}}

                <div class="mb-4">
                    <label for="newname" class="sr-only">Name</label>
                    <input type="text" name="newname" id="newname" placeholder="Your name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('newname')
                    border-red-500 @enderror" value="{{ old('name', $user->name) }}">

                    @error('newname')
                        <div class="text-red-500 mt-2 text-sm">
                            {{  $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="newusername" class="sr-only">Username</label>
                    <input type="text" name="newusername" id="newusername" placeholder="Your username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('newusername')
                    border-red-500 @enderror" value="{{ old('username', $user->username) }}">

                    @error('newusername')
                        <div class="text-red-500 mt-2 text-sm">
                            {{  $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="newemail" class="sr-only">Email</label>
                    <input type="text" name="newemail" id="newemail" placeholder="Your email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('newemail')
                    border-red-500 @enderror" value="{{ old('email', $user->email) }}">

                    @error('newemail')
                        <div class="text-red-500 mt-2 text-sm">
                            {{  $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="newpassword" class="sr-only">Password</label>
                    <input type="password" name="newpassword" id="newpassword" placeholder="Set new password or enter old password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('newpassword')
                    border-red-500 @enderror">

                    @error('newpassword')
                        <div class="text-red-500 mt-2 text-sm">
                            {{  $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="newpassword_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="newpassword_confirmation" id="newpassword_confirmation" placeholder="Repeat password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('newpassword_confirmation')
                    border-red-500 @enderror" value="">

                    @error('newpassword_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{  $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{url()->previous()}}" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Cancel</a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-1/2">
                        Save changes
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
