<x-layout>
    <h1> welcome to job page </h1>

    <ul>
        @foreach ($jobs as $job)
            <a href="jobs/">
                <li> <strong>  {{$job['title']}}: </strong> with {{$job['salary']}} </li>
            </a>
        @endforeach
    </ul>

</x-layout>
