<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Laravel</title>

    </head>
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach ($posts as $post)
                    <div class="bg-white hover:bg-blue-100 border border-gray-100 p-5">
                        <h2 class="font-bold text-lg mb-4">{{ $post->title }}</h2>
                        <p class="text-xs">
                            {{ $post->Excerpt }}
                        </p>
                        <p class="text-xs text-right">
                            {{ $post->PublishedAt }}
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="mb-10">
                {{ $posts->links() }}
            </div>
        </div>
    </body>
</html>
