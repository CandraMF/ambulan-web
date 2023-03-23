<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Ambulan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form method="post" action="{{ route('ambulan.store') }}" >
            @csrf
            @method('post')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                    <h3>Data Ambulan</h3>
                    <div  class=" mt-6 gap-y-6 grid lg:grid-cols-2 grid-cols-1 gap-x-5">
                        <div class="col-span-1 ">
                            <x-input-label for="nama" :value="__('Nama Ambulan')" />
                            <x-text-input  id="nama" name="nama" type="text" class="mt-1 block w-full"  required autofocus autocomplete="nama" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="merk" :value="__('Merk')" />
                            <x-text-input id="merk" name="merk" type="text" class="mt-1 block w-full"  required autofocus autocomplete="merk" />
                            <x-input-error class="mt-2" :messages="$errors->get('merk')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="tahun" :value="__('Tahun')" />
                            <x-text-input id="tahun" name="tahun" type="text" class="mt-1 block w-full"  required autofocus autocomplete="tahun" />
                            <x-input-error class="mt-2" :messages="$errors->get('tahun')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="jumlah" :value="__('Jumlah')" />
                            <x-text-input id="jumlah" name="jumlah" type="text" class="mt-1 block w-full"  required autofocus autocomplete="jumlah" />
                            <x-input-error class="mt-2" :messages="$errors->get('jumlah')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                            <textarea id="deskripsi" name="deskripsi" type="text" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"  required autofocus autocomplete="deskripsi">

                            </textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                        </div>
                    </div>

                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg ">
                    <div class="">
                        <h3>Upload Foto</h3>
                        <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-4 mt-5 gap-5">

                            <div class="col-span-1" >
                                <label for="dropzone-file" class="cursor-pointer flex flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>

                                    <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">File Foto</h2>

                                    <p class="mt-2 text-gray-500 tracking-wide">File Harus Bertipe SVG, PNG, JPG or GIF. </p>

                                    <input id="dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>

                            <div class="col-span-1">
                                <label for="dropzone-file-2" class="h-full cursor-pointer flex justify-center items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                                    <i class="fas fa-plus"></i>
                                </label>
                            </div>
                        </div>
                        <div class="mt-5 flex justify-end">
                            <x-primary-button type="submit">{{ __('Simpan') }}</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>


<script>

</script>
