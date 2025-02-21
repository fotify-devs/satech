<div>
    <form wire:submit="save" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $editMode ? 'Edit Department' : 'Create Department' }}
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Provide the department details below.
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <div class="mt-1">
                            <input type="text" wire:model="title" id="title"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
                        <div class="mt-1">
                            <input type="text" wire:model="subtitle" id="subtitle"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                        @error('subtitle')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea wire:model="description" id="description" rows="3"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                        </div>
                        @error('description')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="embedded_link" class="block text-sm font-medium text-gray-700">Embedded Link</label>
                        <div class="mt-1">
                            <input type="url" wire:model="embedded_link" id="embedded_link"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>



                        @error('embedded_link')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="icon" class="block text-sm font-medium text-gray-700">Department Icon</label>
                        <div class="mt-1 flex items-center">
                            @if ($icon && !$icon->isPreviewable())
                                <img src="{{ $icon->temporaryUrl() }}" class="h-12 w-12 rounded-full">
                            @elseif ($editMode && $department->icon)
                                <img src="{{ Storage::url($department->icon) }}" class="h-12 w-12 rounded-full">
                            @endif
                            <div class="ml-4">
                                <input type="file" wire:model="icon" id="icon" class="sr-only">
                                <label for="icon"
                                    class="cursor-pointer bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Change
                                </label>
                            </div>
                        </div>
                        @error('icon')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="resources" class="block text-sm font-medium text-gray-700">Department
                            Resources</label>
                        <div class="mt-1">
                            <input type="file" wire:model="resources" id="resources" multiple
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        @error('resources.*')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                        @if ($editMode && $department->resources->count() > 0)
                            <div class="mt-4">
                                <h4 class="text-sm font-medium text-gray-900">Current Resources</h4>
                                <ul class="mt-2 divide-y divide-gray-200">
                                    @foreach ($department->resources as $resource)
                                        <li class="py-2 flex items-center justify-between">
                                            <span class="text-sm text-gray-500">{{ $resource->original_name }}</span>
                                            <a href="{{ Storage::url($resource->file_path) }}"
                                                class="text-indigo-600 hover:text-indigo-900"
                                                target="_blank">Download</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="sm:col-span-6">
                        <label for="images" class="block text-sm font-medium text-gray-700">Department Images</label>
                        <div class="mt-1">
                            <input type="file" wire:model="images" id="images" multiple accept="image/*"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        @error('images.*')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                        @if ($editMode && $department->images->count() > 0)
                            <div class="mt-4">
                                <h4 class="text-sm font-medium text-gray-900">Current Images</h4>
                                <div class="mt-2 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                                    @foreach ($department->images as $image)
                                        <div class="relative">
                                            <img src="{{ Storage::url($image->image_path) }}"
                                                alt="{{ $image->original_name }}"
                                                class="h-24 w-24 rounded-lg object-cover">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <a href="{{ route('admin.departments.index') }}"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </a>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ $editMode ? 'Update' : 'Create' }}
                </button>
            </div>
        </div>
    </form>

    @if (session()->has('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
            class="fixed bottom-0 right-0 m-6 p-4 rounded-lg bg-green-500 text-white">
            {{ session('success') }}
        </div>
    @endif
</div>
