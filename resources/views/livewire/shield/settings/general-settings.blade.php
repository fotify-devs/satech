<!-- resources/views/livewire/shield/settings/general-settings.blade.php -->
<div>
    <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">
        @if (session()->has('message'))
            <div class="rounded-md bg-green-50 p-4 mb-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">
                            {{ session('message') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Logo Section -->
        <div class="space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Institution Logo
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    @if ($settings->institution_logo && !$newLogo)
                    <div class="mb-4">
                        <img src="{{ Storage::disk('public')->url($settings->institution_logo) }}" 
                             alt="Current Logo" 
                             class="h-20 w-auto object-contain">
                        <button type="button" 
                                wire:click="removeExistingLogo"
                                class="mt-2 text-sm text-red-600 hover:text-red-800">
                            Remove Logo
                        </button>
                    </div>
                @endif
                            <!-- Preview for newly uploaded logo -->
            @if ($newLogo)
            <div class="mb-4">
                <img src="{{ $newLogo->temporaryUrl() }}" 
                     alt="New Logo Preview" 
                     class="h-20 w-auto object-contain">
                <button type="button" 
                        wire:click="$set('newLogo', null)"
                        class="mt-2 text-sm text-red-600 hover:text-red-800">
                    Cancel Upload
                </button>
            </div>
        @endif
        <input type="file" 
        wire:model="newLogo" 
        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
        accept="image/*">
 <div wire:loading wire:target="newLogo">
     <span class="text-sm text-gray-500">Uploading...</span>
 </div>
 @error('newLogo') 
     <span class="text-red-500 text-sm">{{ $message }}</span>
 @enderror
</div>
</div>

            <!-- Favicon Section -->
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Favicon (32x32)
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    @if ($settings->favicon)
                        <div class="mb-4">
                            <img src="{{ Storage::url($settings->favicon) }}" 
                                 alt="Current Favicon" 
                                 class="h-8 w-8">
                        </div>
                    @endif
                    <input type="file" 
                           wire:model="newFavicon" 
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('newFavicon') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- About Section -->
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    About
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <textarea wire:model="about" 
                              rows="4" 
                              class="max-w-lg shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                    @error('about') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Contact Details -->
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Address
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" 
                           wire:model="address" 
                           class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                    @error('address') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Phone
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" 
                           wire:model="phone" 
                           class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                    @error('phone') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Email
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="email" 
                           wire:model="email" 
                           class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                    @error('email') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Social Links -->
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Social Media Links
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2 space-y-4">
                    <div>
                        <label class="block text-sm text-gray-500">Facebook</label>
                        <input type="url" 
                               wire:model="socialLinks.facebook" 
                               class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                        @error('socialLinks.facebook') 
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm text-gray-500">Twitter</label>
                        <input type="url" 
                               wire:model="socialLinks.twitter" 
                               class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                        @error('socialLinks.twitter') 
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm text-gray-500">Instagram</label>
                        <input type="url" 
                               wire:model="socialLinks.instagram" 
                               class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                        @error('socialLinks.instagram') 
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm text-gray-500">LinkedIn</label>
                        <input type="url" 
                               wire:model="socialLinks.linkedin" 
                               class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md">
                        @error('socialLinks.linkedin') 
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit" 
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Save Changes
                </button>
            </div>
        </div>
    </form>
</div>