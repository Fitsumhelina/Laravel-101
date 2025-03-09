<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gray-800 text-white text-center py-4">
            <h2 class="text-2xl font-bold">Title : {{ $job['title'] }}</h2>
        </div>
        <div class="p-6">
            <div class="mb-4">
                <h3 class="text-xl font-semibold">Company</h3>
                <p class="text-gray-700">{{ $job['company'] }}</p>
            </div>
            <div class="mb-4">
                <h3 class="text-xl font-semibold">Description</h3>
                <p class="text-gray-700">{{ $job['description'] }}</p>
            </div>
            <div class="mb-4">
                <h3 class="text-xl font-semibold">Salary</h3>
                <p class="text-gray-700">{{ $job['salary'] }}$ per year</p>
            </div>
            <div class="mb-4">
                <h3 class="text-xl font-semibold">Location</h3>
                <p class="text-gray-700">{{ $job['location'] }}</p>
            </div>
            <div class="mt-6 text-center">
                <h3 class="text-xl font-semibold"><strong>{{$job->Employer->name}} </strong>Works here</h3>
            </div>
        </div>
        <div class="flex justify-center space-x-4 p-4">
            <x-button href="/jobs/{{ $job['id'] }}/edit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</x-button>
            <x-button href="" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</x-button>
        </div>
    </div>
</x-layout>
