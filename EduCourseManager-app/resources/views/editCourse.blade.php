<x-app-layout>
    <x-slot name="header">
        {{ 'Edit Courses' }}
    </x-slot>

    <div class=" bg-gray-800 text-white">
        <div class="container mx-auto py-10 px-6">

            <form action="{{ url('editCourse/' .$course->id. '/edit') }}" method="POST" class="bg-gray-900 p-6 rounded-lg shadow-lg"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Course Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter course name"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required value="{{ $course->name }}"/>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" placeholder="Enter course description"
                        value="{{ 'description' }}"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required >{{ $course->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-300 mb-2">Price (IDR)</label>
                    <input type="number" name="price" id="price" placeholder="Enter course price"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required value="{{ $course->price }}" />
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-300 mb-2">Status</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="active" {{ $course->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $course->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('dashboard') }}"
                        class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75 mr-4">Cancel</a>
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-75">Save</button>
                </div>
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
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
