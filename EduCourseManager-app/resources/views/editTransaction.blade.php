<x-app-layout>
    <x-slot name="header">
        {{ 'Edit Transaction' }}
    </x-slot>

    <div class=" bg-gray-800 text-white">
        <div class="container mx-auto py-10 px-6">

            <form action="{{ url("transaction/" .$registration->id. "/edit") }}" method="POST" class="bg-gray-900 p-6 rounded-lg shadow-lg">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Student Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter student name"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required value="{{ $registration->users->name }}"/>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Student Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter student email"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required value="{{ $registration->users->email }}"/>
                </div>
                
                <div class="mb-4">
                    <label for="course" class="block text-sm font-medium text-gray-300 mb-2">Course Name</label>
                    <select name="course" id="course"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ $registration->course_id == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="date" class="block text-sm font-medium text-gray-300 mb-2">Input Date</label>
                    <input type="date" name="date" id="date" placeholder="Enter date"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required value="{{ $registration->updated_at->format('Y-m-d') }}">
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-300 mb-2">Status</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value={{ "Lunas" }}>Lunas</option>
                        <option value={{ "Belum Lunas" }}>Belum Lunas</option>
                    </select>
                </div>

                <div class="flex justify-end mt-5">
                    <a href="{{ route('dashboard') }}"
                        class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75 mr-4">Cancel</a>
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-75">Register</button>
                </div>

                @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-lg mb-4 mt-7">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </form>
        </div>
    </div>

</x-app-layout>
