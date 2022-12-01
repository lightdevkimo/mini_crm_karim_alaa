<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Customer') }}
        </h2>
    </x-slot>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('customers.store')}}" >
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="name">Name<span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 text-gray-50 focus:border-blue-700 mt-4 bg-gray-800 p-2 w-full bg-gray-800 border-0 rounded" name="name" id="name" value="{{ old('name') }}"  required>
                            @error('name') <p class="text-red-500">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="actions">Actions<span class="text-red-500">*</span></label></br>
                            <select type="text" class="border-2 border-gray-300 text-gray-50 focus:border-blue-700 mt-4 bg-gray-800 p-2 w-full bg-gray-800 border-0 rounded" name="actions" id="actions" required>
                                <option value="">Select Status</option>
                                <option value="call">call</option>
                                <option value="visit">visit</option>
                                <option value="follow up">follow up</option>
                            </select>
                        </div>
                        @error('actions') <p class="text-red-500">{{$message}}</p> @enderror

                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="notes">Notes</label><span class="text-red-500">*</span></br>
                            <textarea name="notes"  id="notes" class="w-full h-40 text-base leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-800 border-0 rounded" required></textarea>
                            @error('notes') <p class="text-red-500">{{$message}}</p> @enderror
                        </div>

                        <div class="flex items-center justify-center w-full">
                            <input type="submit" name="submit" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none"  value="Submit">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
