<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form method="post" action="{{ route('setting.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h3>Umum</h3>
                    <div class=" mt-6 gap-y-6 grid lg:grid-cols-2 grid-cols-1 gap-x-5">
                        <div class="col-span-1 ">
                            <x-input-label for="nama" :value="__('Nama Perusahaan')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="nama" value="{!! old('nama', $data->nama) !!}" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="jargon" :value="__('Jargon')" />
                            <x-text-input id="jargon" name="jargon" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="jargon" value="{!! old('jargon', $data->jargon) !!}" />
                            <x-input-error class="mt-2" :messages="$errors->get('jargon')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="alamat" :value="__('Alamat')" />
                            <textarea id="alamat" name="alamat" type="text"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                autocomplete="alamat">{!! old('alamat', $data->alamat) !!}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                        </div>
                        <div class="col-span-2 ">
                            <x-input-label for="deskripsi" :value="__('Deskripsi Perusahaan')" />
                            <textarea id="deskripsi" name="deskripsi" type="text"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                autocomplete="deskripsi" rows="10">{!! old('deskripsi', $data->deskripsi) !!}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                        </div>
                    </div>

                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h3>Kontak</h3>
                    <div class=" mt-6 gap-y-6 grid lg:grid-cols-2 grid-cols-1 gap-x-5">
                        <div class="col-span-1 ">
                            <x-input-label for="no_hp" :value="__('Nomor HP')" />
                            <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="no_hp" value="{!! old('no_hp', $data->no_hp) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('no_hp')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="no_hp_alt" :value="__('Nomor HP Alternatif')" />
                            <x-text-input id="no_hp_alt" name="no_hp_alt" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="no_hp_alt" value="{!! old('no_hp_alt', $data->no_hp_alt) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('no_hp_alt')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="email" value="{!! old('email', $data->email) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                    </div>

                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h3>Sosial Media</h3>
                    <div class=" mt-6 gap-y-6 grid lg:grid-cols-2 grid-cols-1 gap-x-5">
                        <div class="col-span-1 ">
                            <x-input-label for="youtube" :value="__('Youtube')" />
                            <x-text-input id="youtube" name="youtube" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="youtube" value="{!! old('youtube', $data->youtube) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('youtube')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="instagram" :value="__('Instagram')" />
                            <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="instagram" value="{!! old('instagram', $data->instagram) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="tiktok" :value="__('Tiktok')" />
                            <x-text-input id="tiktok" name="tiktok" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="tiktok" value="{!! old('tiktok', $data->tiktok) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('tiktok')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="whatsapp" :value="__('Whatsapp')" />
                            <x-text-input id="whatsapp" name="whatsapp" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="whatsapp" value="{!! old('whatsapp', $data->whatsapp) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('whatsapp')" />
                        </div>
                    </div>

                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h3>Call To Action</h3>
                    <div class=" mt-6 gap-y-6 grid lg:grid-cols-2 grid-cols-1 gap-x-5">
                        <div class="col-span-1 ">
                            <x-input-label for="judul_cta" :value="__('Judul CTA')" />
                            <x-text-input id="judul_cta" name="judul_cta" type="text" class="mt-1 block w-full"
                                autofocus autocomplete="judul_cta" value="{!! old('judul_cta', $data->judul_cta) !!}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('judul_cta')" />
                        </div>
                        <div class="col-span-1 ">
                            <x-input-label for="judul_cta" :value="__('Deskripsi CTA')" />
                            <textarea id="deskripsi_cta" name="deskripsi_cta" type="text"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                autocomplete="deskripsi_cta">{!! old('deskripsi_cta', $data->deskripsi_cta) !!}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('deskripsi_cta')" />
                        </div>
                    </div>
                    <footer class="flex justify-end px-8 pb-8 pt-4 gap-3" x-data="">
                        <x-primary-button id="submit" type="submit">{{ __('Simpan') }}</x-primary-button>
                        <x-secondary-button id="cancel" type="reset" @click="window.location.replace('/dashboard')">{{ __('Batal') }}</x-secondary-button>
                    </footer>

                </div>
                {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg ">
                    <h3>Upload Foto</h3>
                    <article aria-label="File Upload Modal"
                        class="relative h-full flex flex-col bg-white shadow-xl  mt-5 rounded-md" ondrop="dropHandler(event);"
                        ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);"
                        ondragenter="dragEnterHandler(event);">
                        <!-- overlay -->
                        <div id="overlay"
                            class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                            <i>
                                <svg class="fill-current w-12 h-12 mb-3 text-blue-700"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                                </svg>
                            </i>
                            <p class="text-lg text-blue-700">Drop files to upload</p>
                        </div>

                        <!-- scroll area -->
                        <section class="h-full overflow-auto p-8 w-full flex flex-col">
                            <header
                                class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                    <span>Drag & drop file anda disini atau</span>
                                </p>
                                <input id="hidden-input" type="file" multiple class="hidden" name="foto[]" accept="image/jpg, image/jpeg, image/gif, image/png" />
                                <button id="button"
                                    type="button"
                                    class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                    Upload file
                                </button>
                            </header>
                            <x-input-error class="mt-2" :messages="$errors->get('foto')" />
                            <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                File Anda
                            </h1>

                            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                <li id="empty"
                                    class="h-full w-full text-center flex flex-col items-center justify-center">
                                    <img class="mx-auto w-32"
                                        src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                                        alt="no data" />
                                    <span class="text-small text-gray-500">Belum Ada File</span>
                                </li>
                            </ul>
                        </section>

                        <!-- sticky footer -->
                        <footer class="flex justify-end px-8 pb-8 pt-4 gap-3" x-data="">
                            <x-primary-button id="submit" type="submit">{{ __('Simpan') }}</x-primary-button>
                            <x-secondary-button id="cancel" type="reset" @click="window.location.replace('/dashboard')">{{ __('Batal') }}</x-secondary-button>
                        </footer>
                    </article>
                    <template id="file-template">
                        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                            <article tabindex="0"
                                class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                <img alt="upload preview"
                                    class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                                <section
                                    class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                    <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                    <div class="flex">
                                        <span class="p-1 text-blue-800">
                                            <i>
                                                <svg class="fill-current w-4 h-4 ml-auto pt-1"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                                </svg>
                                            </i>
                                        </span>
                                        <p class="p-1 size text-xs text-gray-700"></p>
                                        <button
                                            class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path class="pointer-events-none"
                                                    d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                            </svg>
                                        </button>
                                    </div>
                                </section>
                            </article>
                        </li>
                    </template>

                    <template id="image-template">
                        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                            <article tabindex="0"
                                class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                <img alt="upload preview"
                                    class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                <section
                                    class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                    <h1 class="flex-1"></h1>
                                    <div class="flex">
                                        <span class="p-1">
                                            <i>
                                                <svg class="fill-current w-4 h-4 ml-auto pt-"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                </svg>
                                            </i>
                                        </span>

                                        <p class="p-1 size text-xs"></p>
                                        <button
                                            class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path class="pointer-events-none"
                                                    d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                            </svg>
                                        </button>
                                    </div>
                                </section>
                            </article>
                        </li>
                    </template>
                </div> --}}
            </div>
        </form>
    </div>

    <script>
        const fileTempl = document.getElementById("file-template"),
            imageTempl = document.getElementById("image-template"),
            empty = document.getElementById("empty");

        // use to store pre selected files
        let FILES = {};

        // check if file is of type image and prepend the initialied
        // template to the target element
        function addFile(target, file) {
            const isImage = file.type.match("image.*"),
                objectURL = URL.createObjectURL(file);

            const clone = isImage ?
                imageTempl.content.cloneNode(true) :
                fileTempl.content.cloneNode(true);

            clone.querySelector("h1").textContent = file.name;
            clone.querySelector("li").id = objectURL;
            clone.querySelector(".delete").dataset.target = objectURL;
            clone.querySelector(".size").textContent =
                file.size > 1024 ?
                file.size > 1048576 ?
                Math.round(file.size / 1048576) + "mb" :
                Math.round(file.size / 1024) + "kb" :
                file.size + "b";

            isImage &&
                Object.assign(clone.querySelector("img"), {
                    src: objectURL,
                    alt: file.name
                });

            empty.classList.add("hidden");
            target.prepend(clone);

            FILES[objectURL] = file;
        }

        const gallery = document.getElementById("gallery"),
            overlay = document.getElementById("overlay");

        // click the hidden input of type file if the visible button is clicked
        // and capture the selected files
        const hidden = document.getElementById("hidden-input");
        document.getElementById("button").onclick = () => hidden.click();
        hidden.onchange = (e) => {
            for (const file of e.target.files) {
                addFile(gallery, file);
            }
        };

        // use to check if a file is being dragged
        const hasFiles = ({
                dataTransfer: {
                    types = [
                        'jpg',
                        'jpeg',
                        'png'
                    ]
                }
            }) =>
            types.indexOf("Files") > -1;

        // use to drag dragenter and dragleave events.
        // this is to know if the outermost parent is dragged over
        // without issues due to drag events on its children
        let counter = 0;

        // reset counter and append file to gallery when file is dropped
        function dropHandler(ev) {
            ev.preventDefault();
            for (const file of ev.dataTransfer.files) {
                addFile(gallery, file);
                overlay.classList.remove("draggedover");
                counter = 0;
            }
        }

        // only react to actual files being dragged
        function dragEnterHandler(e) {
            e.preventDefault();
            if (!hasFiles(e)) {
                return;
            }
            ++counter && overlay.classList.add("draggedover");
        }

        function dragLeaveHandler(e) {
            1 > --counter && overlay.classList.remove("draggedover");
        }

        function dragOverHandler(e) {
            if (hasFiles(e)) {
                e.preventDefault();
            }
        }

        // event delegation to caputre delete events
        // fron the waste buckets in the file preview cards
        gallery.onclick = ({
            target
        }) => {
            if (target.classList.contains("delete")) {
                const ou = target.dataset.target;
                document.getElementById(ou).remove(ou);
                gallery.children.length === 1 && empty.classList.remove("hidden");
                delete FILES[ou];
            }
        };

        // print all selected files
        document.getElementById("submit").onclick = () => {
            // alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
            // console.log(FILES);
        };

        // clear entire selection
        document.getElementById("cancel").onclick = () => {
            while (gallery.children.length > 0) {
                gallery.lastChild.remove();
            }
            FILES = {};
            empty.classList.remove("hidden");
            gallery.append(empty);
        };
    </script>

    <style>
        .hasImage:hover section {
            background-color: rgba(5, 5, 5, 0.4);
        }

        .hasImage:hover button:hover {
            background: rgba(5, 5, 5, 0.45);
        }

        #overlay p,
        i {
            opacity: 0;
        }

        #overlay.draggedover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        #overlay.draggedover p,
        #overlay.draggedover i {
            opacity: 1;
        }

        .group:hover .group-hover\:text-blue-800 {
            color: #2b6cb0;
        }
    </style>
</x-app-layout>
