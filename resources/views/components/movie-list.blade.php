<div>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->naziv }}</li>
            <a href="{{ route('movies.show', $movie->id_film) }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Prikaži</a>
            <form action="{{ route('movies.destroy', $movie->id_film) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="font-semibold text-red-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Obriši</button>
            </form>
        @endforeach
    </ul>
</div>