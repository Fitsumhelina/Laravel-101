<x-layout>
    <x-slot:heading>
       Update Job
    </x-slot:heading>
<form action="/jobs/{{$job->id}}" method="POST" class="max-w-lg mx-auto mt-8 p-4 bg-white shadow-md rounded">
    @csrf
    @method('PATCH')

    <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Job Title:</label>
        <input
         type="text"
         id="title"
         name="title"
         value="{{ $job->title }}"
         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
         >
        @error('title')
        <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Job Description:</label>
        <textarea
        id="description"
        name="description"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        rows="5"
        >{{ $job->description }}</textarea>
        @error('description')
        <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
        <input
         type="text"
         id="location"
         name="location"
         value="{{ $job->location }}"
         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
         >
        @error('location')
        <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
        <input
         type="text"
         id="company"
         name="company"
         value="{{ $job->company }}"
         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
         >
        @error('company')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="salary" class="block text-gray-700 text-sm font-bold mb-2">Salary:</label>
        <input
         type="text"
         id="salary"
         name="salary"
         value="{{ $job->salary }}"
         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
         >
        @error('salary')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex items-center justify-between">
        <a href="/jobs/{{$job->id}}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Cancel
        </a>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Update
        </button>
    </div>
</form>
</x-layout>
