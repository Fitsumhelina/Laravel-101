<x-layout>
    <h1> welcome to job page </h1>

    <ul>
        @foreach ($jobs as $job)
            <a href="jobs/{{$job['id']}}">
                <li> <strong>  {{$job['title']}} </strong> </li>
            </a>
        @endforeach
    </ul>

</x-layout>
