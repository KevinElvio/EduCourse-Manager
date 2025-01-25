<x-app-layout>
    <x-slot name="header">
        {{ 'Add Transaction' }}
    </x-slot>

    <div class=" bg-gray-800 text-white">
        <div class="container mx-auto py-10 px-6">

            <form action="" method="POST" class="bg-gray-900 p-6 rounded-lg shadow-lg">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Student Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter student name"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required />
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Course Name</label>
                    <textarea name="description" id="description" rows="4" placeholder="Enter course name"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required></textarea>
                </div>

                <div class="mb-4">
                    <label for="date" class="block text-sm font-medium text-gray-300 mb-2">Input Date</label>
                    <input type="date" name="date" id="date" placeholder="Enter date"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required />
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-300 mb-2">Status</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="1">Lunas</option>
                        <option value="0">Belum Lunas</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('dashboard') }}"
                        class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75 mr-4">Cancel</a>
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-75">Add
                        Course</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
