<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Student' }}
        </h2>
    </x-slot>

    <div class="bg-gray-800">
        <div class=" sm:px-6 lg:px-8">

            <div class="overflow-x-auto bg-gray-800 rounded-lg">
                <main class="flex-grow container mx-auto pt-6 X">
                    <div class="overflow-x-auto bg-gray-800 rounded-lg border border-white">
                        <table class="table-auto w-full text-left text-white">
                            <thead class="bg-gray-700 text-gray-300">
                                <tr>
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Price</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Students</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr class="border-t border-gray-700">
                                        <td class="px-4 py-2">
                                            {{ $loop->iteration + ($courses->currentPage() - 1) * $courses->perPage() }}
                                        </td>
                                        <td class="px-4 py-2">{{ $course->name }}</td>
                                        <td class="px-4 py-2">{{ Str::limit($course->description, 50) }}</td>
                                        <td class="px-4 py-2">Rp{{ number_format($course->price, 0, ',', '.') }}</td>
                                        <td class="px-4 py-2">
                                            @if ($course->status)
                                                <span class="text-green-500">Active</span>
                                            @else
                                                <span class="text-red-500">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">{{ $course->student_count }}</td>
                                        <td class="px-4 py-2">
                                            <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                            <a href="#" class="text-red-500 hover:underline">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="p-4 bg-gray-800">
                        {{ $courses->links('pagination::tailwind') }}
                    </div>
                </main>
            </div>

        </div>
    </div>
</x-app-layout>
