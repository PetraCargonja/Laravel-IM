<div>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->naziv }}</li>
            <a href="{{ route('movies.show', $movie->id_film) }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Prikaži</a>
        @endforeach
    </ul>
</div>