<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($jobs as $job)
            <div class="bg-white shadow-md rounded-lg p-6">
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <h2 class="text-xl font-bold mb-2">{{ $job['title'] }}</h2>
                </a>
                    <p class="text-gray-700">Pays <strong>{{ $job['salary'] }}$</strong> per year.</p>
            </div>
        @endforeach
    </div>
        <div>
            {{ $jobs->links() }}
        </div>
</x-layout>
