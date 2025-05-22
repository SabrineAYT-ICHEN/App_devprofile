<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Add Skill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="glass-card px-6 pt-6 pb-4 bg-white dark:bg-gray-800 dark:text-gray-200">
                <form method="POST" action="{{ route('skills.store') }}" class="space-y-4">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Skill Name')" class="glass-label text-gray-700 dark:text-gray-200" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full glass-input border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" :value="old('name')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="level" :value="__('Skill Level (0-100)')" class="glass-label text-gray-700 dark:text-gray-200" />
                        <input type="range" id="level" name="level" min="0" max="100" value="{{ old('level', 50) }}" 
                               class="mt-1 block w-full glass-input border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" required
                               oninput="this.nextElementSibling.value = this.value">
                        <output class="text-gray-700 dark:text-gray-200">{{ old('level', 50) }}%</output>
                        <x-input-error class="mt-2" :messages="$errors->get('level')" />
                    </div>

                    <div class="flex items-center gap-4 mt-6">
                        <x-primary-button class="glass-button text-white bg-violet-600 hover:bg-violet-700 px-4 py-2 rounded-md">
                            {{ __('Save Skill') }}
                        </x-primary-button>
                        <a href="{{ route('skills.index') }}" class="glass-button px-4 py-2 rounded-md text-white bg-violet-600 hover:bg-violet-700">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 