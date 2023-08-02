@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            <form action="{{ route('passwords') }}" method="POST">
                @csrf

                <div class="mb-4">
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
                    <label for="password_to_resource" class="sr-only">Password</label>
                    <input type="text" name="password_to_resource" id="password_to_resource" placeholder="Password to resource"
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

        {{-- <div class="w-10/12 bg-white p-6 rounded-lg">
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
                        </tr>
                      </thead>
                      <tbody>

                        <tr class="border-b dark:border-neutral-500">
                          <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                          <td class="whitespace-nowrap px-6 py-4">Google Account</td>
                          <td class="whitespace-nowrap px-6 py-4">volodymyr</td>
                          <td class="whitespace-nowrap px-6 py-4">*********</td>
                          <td class="whitespace-nowrap px-6 py-4">my google account</td>
                        </tr>

                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                            <td class="whitespace-nowrap px-6 py-4">Google Account</td>
                            <td class="whitespace-nowrap px-6 py-4">volodymyr</td>
                            <td class="whitespace-nowrap px-6 py-4">*********</td>
                            <td class="whitespace-nowrap px-6 py-4">my google account</td>
                          </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div> --}}
    </div>
@endsection
