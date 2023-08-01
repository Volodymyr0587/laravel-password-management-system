@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
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
        </div>
    </div>
@endsection
