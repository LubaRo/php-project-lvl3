<x-layout>
    <h1>Sites</h1>

    <div>
        @foreach ($urls as $url)
            <p><a href="/urls/{{ $url->id }}">{{ $url->name }}</a></p>
        @endforeach
    </div>
</x-layout>
