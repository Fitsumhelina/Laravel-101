<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($jobs as $job)
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <h2 class="text-xl font-bold mb-2">{{ $job['title'] }}</h2>
                </a>
                <p class="text-gray-700">Pays <strong>{{ $job['salary'] }}$</strong> per year.</p>
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        <x-button href="/jobs/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">Create Job</x-button>
    </div>
    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>
