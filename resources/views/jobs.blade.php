<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <a href="/jobs/ {{$job['id']}}" class="text-blue-500 hover:underline">
            <li>
                {{$job['title']}} :pay {{$job['salary']}}
            </li>
        </a>
        @endforeach
    </ul>
</x-layout>
