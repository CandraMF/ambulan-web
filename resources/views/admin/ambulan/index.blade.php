<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Ambulan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-9">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <button class="mx-2 my-2 bg-white transition duration-150 ease-in-out rounded text-gray-800 border border-gray-300 px-6 py-2 text-xs hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-800">Button</button> --}}
                    <div class="flex justify-end mb-5">
                        <a href="{{ route('ambulan.create') }}">
                            <x-primary-button>
                                {{ __('Tambah Data') }}
                            </x-primary-button>
                        </a>
                    </div>
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-center">#</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ambulan</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tahun</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Jumlah</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-80">Deskripsi</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($datas as $data)
                                <tr class="hover:bg-gray-50">
                                    <td class="text-center">{{ $i++ }}</td>
                                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                        <div class="relative h-10 w-10">
                                            <img class="h-full w-full rounded-full object-cover object-center"
                                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="" />
                                        </div>
                                        <div class="text-sm">
                                            <div class="font-medium text-gray-700">{{ $data->nama }}</div>
                                            <div class="text-gray-400">{{ $data->merk }}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">

                                        @if ($data->status == 1)
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                                Aktif
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                                <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                                Tidak Aktif
                                            </span>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4">{{ $data->tahun }}</td>
                                    <td class="px-6 py-4">{{ $data->jumlah }}</td>
                                    <td class="px-6 py-4">{{ $data->deskripsi }}</td>
                                    {{-- <td class="px-6 py-4">
                                        <div class="flex gap-2">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                                                Design
                                            </span>
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600">
                                                Product
                                            </span>
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600">
                                                Develop
                                            </span>
                                        </div>
                                    </td> --}}
                                    <td class="px-6 py-4">
                                        <div class="flex justify-end gap-4">
                                            <a x-data="{ tooltip: 'Delete' }" href="#"
                                                x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'confirm-delete')">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                    x-tooltip="tooltip">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </a>
                                            <a x-data="{ tooltip: 'Edit' }" href="{{ route('ambulan.edit', $data->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                    x-tooltip="tooltip">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pt-5">
                        {{ $datas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="confirm-delete" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Yakin ingin menghapus data?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Data yang telah di hapus tidak dapat tikembalikan lagi') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Batal') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Hapus Data') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</x-app-layout>
