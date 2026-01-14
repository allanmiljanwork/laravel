<x-layout>
    <x-slot:heading>
        Job listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">

                <li><strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year. </li>
        @endforeach
        </a>
    </ul>

</x-layout>
