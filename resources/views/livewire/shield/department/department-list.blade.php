<div>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Departments</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all departments in your institution.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('admin.departments.create') }}"
                   class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Department
                </a>
            </div>
        </div>

        <div class="mt-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <div class="max-w-xl">
                        <input wire:model.live="search" type="search"
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="Search departments...">
                    </div>
                </div>
            </div>

            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            <button wire:click="sortBy('title')" class="group inline-flex">
                                                Title
                                                <span class="ml-2 flex-none rounded text-gray-400">
                                                    @if($sortField === 'title')
                                                        @if($sortDirection === 'asc')
                                                            ↑
                                                        @else
                                                            ↓
                                                        @endif
                                                    @endif
                                                </span>
                                            </button>
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Courses</th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @forelse($departments as $department)
                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <div class="flex items-center">
                                                    @if($department->icon)
                                                        <img src="{{ Storage::url($department->icon) }}"
                                                             alt="{{ $department->title }}"
                                                             class="h-8 w-8 rounded-full">
                                                    @endif
                                                    <div class="ml-4">
                                                        <div class="font-medium text-gray-900">{{ $department->title }}</div>
                                                        @if($department->subtitle)
                                                            <div class="text-gray-500">{{ $department->subtitle }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-3 py-4 text-sm text-gray-500">
                                                {{ Str::limit($department->description, 100) }}
                                            </td>
                                            <td class="px-3 py-4 text-sm text-gray-500">
                                                {{ $department->courses_count ?? 0 }} courses
                                            </td>
                                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                <a href="{{ route('admin.departments.edit', $department) }}"
                                                   class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                                                <button wire:click="deleteDepartment({{ $department->id }})"
                                                        wire:confirm="Are you sure you want to delete this department?"
                                                        class="text-red-600 hover:text-red-900">Delete</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="px-3 py-4 text-sm text-gray-500 text-center">
                                                No departments found.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                {{ $departments->links() }}
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div x-data="{ show: true }"
             x-show="show"
             x-init="setTimeout(() => show = false, 3000)"
             class="fixed bottom-0 right-0 m-6 p-4 rounded-lg bg-green-500 text-white">
            {{ session('success') }}
        </div>
    @endif
</div>
