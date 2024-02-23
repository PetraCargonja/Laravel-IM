<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-3xl font-bold mb-4">{{ $movie->naziv }}</h1>
                    <p class="mb-4">{{ $movie->godina }}</p>
                    <p class="mb-4">{{ $movie?->genre?->naziv }}</p>
                </div>
                <div class="p-6">
                <a href="{{ route('movies.index') }}" class="text-blue-500 hover:underline">Back to movies</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>