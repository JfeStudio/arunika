<x-app-website>
    @foreach ($challenges as $challenge)
        <li>{{ $challenge->title }}</li>
        <li>{{ $challenge->description }}</li>
    @endforeach
</x-app-website>
