<x-app-layout>
    <x-slot name="header">
        {{ 'Students' }}
    </x-slot>

    <div class="bg-gray-800">
        <div class="sm:px-6 lg:px-8">
            <div class="overflow-x-auto rounded-lg">
                <main class="flex-grow container mx-auto pt-6">
                    <div class="overflow-x-auto rounded-lg border border-white">
                        <table class="table-auto w-full text-left text-white">
                            <thead class="bg-gray-700 text-gray-300">
                                <tr>
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Nama Siswa</th>
                                    <th class="px-4 py-2">Nama Kursus</th>
                                    <th class="px-4 py-2">Tanggal Pendaftaran</th>
                                    <th class="px-4 py-2">Status Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr class="border-t border-gray-700">
                                        <td class="px-4 py-2">
                                            {{ $loop->iteration + ($students->currentPage() - 1) * $students->perPage() }}
                                        </td>
                                        <td class="px-4 py-2">{{ $student->users->name }}</td>
                                        <td class="px-4 py-2">{{ $student->courses->name }}</td>
                                        <td class="px-4 py-2">{{ $student->created_at }}</td>
                                        <td class="px-4 py-2">
                                            @if ($student->status === 'Lunas')
                                                <span class="text-green-500">Lunas</span>
                                            @else
                                                <span class="text-red-500">Belum Lunas</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="p-4 bg-gray-800">
                        {{ $students->links('pagination::tailwind') }}
                    </div>
                    <div class="mb-10 flex justify-between mt-8">
                        <div class="flex space-x-4">
                            <button
                                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 100 100">
                                    <path fill="currentColor"
                                        d="M94.284 65.553L75.825 52.411a1.25 1.25 0 0 0-1.312-.093c-.424.218-.684.694-.685 1.173l.009 6.221H57.231c-.706 0-1.391.497-1.391 1.204v11.442c0 .707.685 1.194 1.391 1.194h16.774v6.27c0 .478.184.917.609 1.136s.853.182 1.242-.097l18.432-13.228c.335-.239.477-.626.477-1.038v-.002c0-.414-.144-.8-.481-1.04" />
                                    <path fill="currentColor"
                                        d="M64.06 78.553h-6.49a1.73 1.73 0 0 0-1.73 1.73h-.007v3.01H15.191V36.16h17.723a1.73 1.73 0 0 0 1.73-1.73V16.707h21.188v36.356h.011a1.73 1.73 0 0 0 1.726 1.691h6.49c.943 0 1.705-.754 1.726-1.691h.004V12.5h-.005V8.48a1.73 1.73 0 0 0-1.73-1.73h-32.87L5.235 32.7v58.819c0 .956.774 1.73 1.73 1.73h57.089a1.73 1.73 0 0 0 1.73-1.73v-2.448h.005v-8.79a1.73 1.73 0 0 0-1.729-1.728" />
                                </svg>Export
                            </button>
                            <button
                                class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 flex">
                                Import
                            </button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
