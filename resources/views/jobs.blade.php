<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    @foreach ($jobs as $job)
    <li>{{$job['title']}} :pay {{$job['salary']}}</li>
    @endforeach
</x-layout>
