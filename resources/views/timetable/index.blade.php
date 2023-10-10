<x-app-layout>
    <div class="flex h-full">
        <section class="h-full z-30 sticky">
            @include('layouts.sidebar')
        </section>

        <div class="flex-grow py-12 border-b border-gray-200 ">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden rounded shadow-sm">

                    <h2 class="text-xl px-6 py-4 bg-gray-300 font-bold mb-4">{{$title}}</h2>

                    <section class=" items-center border-b border-gray-200   py-3">
                        <div class="display-block">
                            <h2 class="font-sans antialiased font-bold px-4 m-3 text-x">Lecture TimeTables</h2>
                        </div>

                        <div class="mt-3">
                            @if (count($timetable)>=1)
                            <table  class="table table-hover">
                            
                            <thead class="bg-black text-white rounded">
                                <tr class="justify-space-around">
                                <th scope="col">TYPE</th>
                                <th scope="col">SEMESTER</th>
                                <th scope="col">DRAFT</th>
                                <th scope="col" colspan="2" align="center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($timetable as $table)
                                <tr>
                                <td>{{$table->type}}</td>
                                <td>{{$table->semester}}</td>
                                <td>{{$table->draft}}</td>
                                {{-- @if (!Auth::guest()) 
                                    @if(Auth::user()->id==$course->id) --}}
                                    <td align="center"><a href="./courseregistration/{{$table->id}}/show" class="btn text-white ml-3" style="background-color: green; box-shadow:2px 2px 3px black; margin: 0 auto;">View Document</a></td>
                                    {{-- <td><a href="./courseregistration/{{$course->id}}/show" class="btn btn-danger">View</a></td> --}}
                                    {{-- <td><a href="#" class="btn btn-success">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td> --}}
                                    {{-- <td>{!!Form::open(['action'=> ['App\Http\Controllers\PostController@destroy', $post->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>  --}}
                               {{--  @endif
                            @endif --}}
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            @endif
                        </div>
                    </section>

                </div>
            </div>
        <hr>
        </div>
    </div>
</x-app-layout>
