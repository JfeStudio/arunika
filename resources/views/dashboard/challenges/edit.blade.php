<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Card') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <form action="{{ route('challenges.update', $challenge->id) }}" method="post"
            class="bg-white p-5 rounded-md flex flex-wrap gap-x-7">
            @csrf
            @method('PUT')
            <div class="lg:basis-4/12">
                <div class="mb-6">
                    <label for="fee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fee</label>
                    <select id="fee" name="fee"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{-- <option select>Free / Premium</option> --}}
                        <option value="Free" {{ $challenge->fee == 'Free' ? 'selected' : '' }}>Free</option>
                        <option value="Premium" {{ $challenge->fee == 'Premium' ? 'selected' : '' }}>Premium</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="title"
                        class="@error('title') label-error @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $challenge->title) }}"
                        class="@error('title') input-error @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Title Website">
                    @error('title')
                        <p class="mt-2 font-medium text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="markup"
                        class="@error('markup') label-error @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white">Markup</label>
                    <input type="text" id="markup" name="markup" value="{{ $challenge->markup }}"
                        class="@error('markup') input-error @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Markup HTML">
                    @error('markup')
                        <p class="mt-2 font-medium text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="lg:basis-4/12">
                <div class="mb-6">
                    <label for="styling"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Styling</label>
                    <select id="styling" name="styling"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{-- <option selected>Format Styling</option> --}}
                        <option value="CSS" {{ $challenge->styling == 'CSS' ? 'selected' : '' }}>CSS</option>
                        <option value="Bootstrap" {{ $challenge->styling == 'Bootstrap' ? 'selected' : '' }}>Bootstrap
                        </option>
                        <option value="Tailwind" {{ $challenge->styling == 'Tailwind' ? 'selected' : '' }}>Tailwind
                        </option>
                        <option value="Bulma" {{ $challenge->styling == 'Bulma' ? 'selected' : '' }}>Bulma</option>
                        <option value="Chakra UI" {{ $challenge->styling == 'Chakra UI' ? 'selected' : '' }}>Chakra UI
                        </option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="language"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
                    <select id="language" name="language"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{-- <option selected>Format Language</option> --}}
                        <option value="JS" {{ $challenge->language == 'JS' ? 'selected' : '' }}>JS</option>
                        <option value="VUE" {{ $challenge->language == 'VUE' ? 'selected' : '' }}>VUE</option>
                        <option value="REACT" {{ $challenge->language == 'REACT' ? 'selected' : '' }}>REACT</option>
                        <option value="ANGULAR" {{ $challenge->language == 'ANGULAR' ? 'selected' : '' }}>ANGULAR
                        </option>
                        <option value="SVELTE" {{ $challenge->language == 'SVELTE' ? 'selected' : '' }}>SVELTE</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="mode"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mode</label>
                    <select id="mode" name="mode"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{-- <option selected>Format Mode</option> --}}
                        <option value="Newbie" {{ $challenge->mode == 'Newbie' ? 'selected' : '' }}>Newbie</option>
                        <option value="Junior" {{ $challenge->mode == 'Junior' ? 'selected' : '' }}>Junior</option>
                        <option value="Intermediate" {{ $challenge->mode == 'Intermediate' ? 'selected' : '' }}>
                            Intermediate</option>
                        <option value="Advanced" {{ $challenge->mode == 'Advanced' ? 'selected' : '' }}>Advanced
                        </option>
                        <option value="Guru" {{ $challenge->mode == 'Guru' ? 'selected' : '' }}>Guru</option>
                    </select>
                </div>
            </div>
            <div class="lg:basis-3/12">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF
                        (MAX. 800x400px).</p>
                </div>
                <div
                    class="@error('description') textarea-error @enderror w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="3" name="description"
                            class="@error('description') textarea-error @enderror w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write a description...">
                            {{ old('description', $challenge->description) }}
                        </textarea>
                    </div>
                    <div class="flex items-center justify-between py-1 border-t dark:border-gray-600">
                        <div class="flex pl-0 sm:pl-2">
                            <button type="button"
                                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Attach file</span>
                            </button>
                            <button type="button"
                                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Set location</span>
                            </button>
                            <button type="button"
                                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Upload image</span>
                            </button>
                        </div>
                    </div>
                </div>
                @error('description')
                    <p class="mt-2 font-medium text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="lg:basis-full">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
