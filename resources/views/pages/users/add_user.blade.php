<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add User') }}
        </h2>
    </x-slot>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('users.store')}}" >
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="name">Name<span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 text-gray-50 focus:border-blue-700 mt-4 bg-gray-800 p-2 w-full bg-gray-800 border-0 rounded" name="name" id="name" value="{{ old('name') }}"  required>
                            @error('name') <p class="text-red-500">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="email">Email<span class="text-red-500">*</span></label></br>
                            <input type="email" class="border-2 border-gray-300 text-gray-50 focus:border-blue-700 mt-4 bg-gray-800 p-2 w-full bg-gray-800 border-0 rounded" name="email" id="email" value="{{ old('email') }}"  required>
                            @error('email') <p class="text-red-500">{{$message}}</p> @enderror
                        </div>


                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="password">Password<span class="text-red-500">*</span></label></br>
                            <input type="password"   name="password" id="password" value="{{old('password')}}" class="border-2 border-gray-300 text-gray-50 focus:border-blue-700 mt-4 bg-gray-800 p-2 w-full bg-gray-800 border-0 rounded"   required>
                            @error('password') <p class="text-red-500">{{$message}}</p> @enderror
                        </div>


                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="password_confirmation">Password Confirmation <span class="text-red-500">*</span></label></br>
                            <input type="password"  name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="border-2 border-gray-300 text-gray-50 focus:border-blue-700 mt-4 bg-gray-800 p-2 w-full bg-gray-800 border-0 rounded"   required>
                            @error('password_confirmation') <p class="text-red-500">{{$message}}</p> @enderror
                        </div>


                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="roles">Roles<span class="text-red-500">*</span></label></br>
                            <select type="text" class="border-2 border-gray-300 text-gray-50 focus:border-blue-700 mt-4 bg-gray-800 p-2 w-full bg-gray-800 border-0 rounded" name="roles" id="roles" required>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('actions') <p class="text-red-500">{{$message}}</p> @enderror

                        <div class="flex items-center justify-center w-full">
                            <input type="submit" name="submit" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none"  value="Submit">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
