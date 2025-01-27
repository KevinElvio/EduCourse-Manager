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
                                    <th class="px-4 py-2">Actions</th>
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
                                        <td class="px-4 py-2 flex">
                                            <a href="{{ url('transaction/' . $student->id . '/edit') }}"
                                                class="text-blue-500 hover:underline">Edit</a> |
                                            <form action="{{ url('deletetransaction/' . $student->id . '/delete') }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-500 hover:underline"
                                                    type="submit">Delete</button>
                                            </form>
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
                            <button onclick="toggleModal(true)"
                                class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 flex"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M9 6c0-1.6.8-3 2-4h-1c-3.9 0-7 .9-7 2c0 1 2.6 1.8 6 2m3.8 4.8c-.9.1-1.9.2-2.8.2c-3.9 0-7-.9-7-2v3c0 1.1 3.1 2 7 2s7-.9 7-2v-2c-.9.7-1.9 1-3 1c-.4 0-.8-.1-1.2-.2M10 15c-3.9 0-7-.9-7-2v3c0 1.1 3.1 2 7 2s7-.9 7-2v-3c0 1.1-3.1 2-7 2m0-5h1c-1-.7-1.7-1.8-1.9-3C5.7 6.9 3 6 3 5v3c0 1.1 3.1 2 7 2m4 0c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4m-1-4V3h2v3h2l-3 3l-3-3z" />
                                </svg>Import</button>
                            <button
                                class="px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 flex"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 15 15">
                                    <path fill="currentColor"
                                        d="M2.5 6.5V6H2v.5zm4 0V6H6v.5zm0 4H6v.5h.5zm7-7h.5v-.207l-.146-.147zm-3-3l.354-.354L10.707 0H10.5zM2.5 7h1V6h-1zm.5 4V8.5H2V11zm0-2.5v-2H2v2zm.5-.5h-1v1h1zm.5-.5a.5.5 0 0 1-.5.5v1A1.5 1.5 0 0 0 5 7.5zM3.5 7a.5.5 0 0 1 .5.5h1A1.5 1.5 0 0 0 3.5 6zM6 6.5v4h1v-4zm.5 4.5h1v-1h-1zM9 9.5v-2H8v2zM7.5 6h-1v1h1zM9 7.5A1.5 1.5 0 0 0 7.5 6v1a.5.5 0 0 1 .5.5zM7.5 11A1.5 1.5 0 0 0 9 9.5H8a.5.5 0 0 1-.5.5zM10 6v5h1V6zm.5 1H13V6h-2.5zm0 2H12V8h-1.5zM2 5V1.5H1V5zm11-1.5V5h1V3.5zM2.5 1h8V0h-8zm7.646-.146l3 3l.708-.708l-3-3zM2 1.5a.5.5 0 0 1 .5-.5V0A1.5 1.5 0 0 0 1 1.5zM1 12v1.5h1V12zm1.5 3h10v-1h-10zM14 13.5V12h-1v1.5zM12.5 15a1.5 1.5 0 0 0 1.5-1.5h-1a.5.5 0 0 1-.5.5zM1 13.5A1.5 1.5 0 0 0 2.5 15v-1a.5.5 0 0 1-.5-.5z" />
                                </svg>Cetak
                                PDF</button>
                        </div>
                    </div>

                    <div id="importModal"
                        class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
                        <div class="bg-white rounded-lg shadow-lg w-96">
                            <div class="px-4 py-3 border-b">
                                <h2 class="text-lg font-semibold text-gray-800">Import Data Excel</h2>
                            </div>
                            <div class="p-4">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="excelFile" class="block text-sm font-medium text-gray-700">Upload
                                            Excel File</label>
                                        <input type="file" name="excel_file" id="excelFile"
                                            class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <div class="flex justify-end space-x-4">
                                        <button type="button" onclick="toggleModal(false)"
                                            class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 focus:outline-none">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none">
                                            Import
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        function toggleModal(show) {
                            const modal = document.getElementById('importModal');
                            modal.style.display = show ? 'flex' : 'none';
                        }
                    </script>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
