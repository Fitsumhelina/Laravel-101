<x-layout>
    <x-slot:heading>
       Update Job
    </x-slot:heading>
<form action="/jobs" method="POST" class="max-w-lg mx-auto mt-8 p-4 bg-white shadow-md rounded">
    @csrf

    <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Job Title:</label>
        <input type="text" id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        @error('title')
        <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Job Description:</label>
        <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5"required></textarea>
        @error('description')
        <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
        <input type="text" id="location" name="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        @error('location')
        <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
        <input type="text" id="company" name="company" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        @error('company')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="salary" class="block text-gray-700 text-sm font-bold mb-2">Salary:</label>
        <input type="text" id="salary" name="salary" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        @error('salary')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Submit
        </button>
    </div>
</form>
</x-layout>
