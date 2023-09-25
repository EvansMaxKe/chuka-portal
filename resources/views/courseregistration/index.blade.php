<x-app-layout>
    <div class="flex h-full">
        <section class="h-full z-30 sticky">
            @include('layouts.sidebar')
        </section>

        <div class="flex-grow py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden rounded shadow-sm">

                    <h2 class="text-xl px-6 py-4 bg-gray-300 font-bold mb-4">{{$title}}</h2>

                    <section class=" items-center border-b border-gray-200   py3">
                        <div class="display-block">
                            <h2 class="font-sans antialiased font-bold px-4 m-3 text-x">Registration Lists</h2>
                        </div>

                        <div class="mt-3">
                            @if (count($courses)>=1)
                            <table  class="table table-hover">
                            
                            <thead class="bg-black text-white rounded">
                                <tr>
                                <th scope="col">STAGE</th>
                                <th scope="col">SEMETSTER</th>
                                <th scope="col">UNIT TAKEN</th>
                                <th scope="col">SETTLEMENT TYPE</th>
                                <th scope="col">REGISTRATION DATE</th>
                                <th scope="col">REGISTER FOR</th>
                                <th scope="col">UNPOSTED CHARGES</th>
                                <th scope="col">TOTAL BILLED</th>
                                <th scope="col" colspan="2" align="center" class="">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                <td>{{$course->stage}}</td>
                                <td>{{$course->semester}}</td>
                                <td>{{$course->unit_taken}}</td>
                                <td>{{$course->settlement_type}}</td>
                                <td>{{$course->registration_date}}</td>
                                <td>{{$course->register_for}}</td>
                                <td>{{$course->unposted_charges}}</td>
                                <td>{{$course->total_billed}}</td>
                                {{-- @if (!Auth::guest()) 
                                    @if(Auth::user()->id==$course->id) --}}
                                    <td><a href="./courseregistration/{{$course->id}}/show" class="btn text-white" style="background-color: rgb(197, 8, 8); box-shadow:2px 2px 3px black">View Units</a></td>
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

            <section class="flex sm:px-6 lg:px-8 flex-col items-center justify-center sm:flex-row mt-8">

               

            </section>

        </div>
        

       

    </div>
</x-app-layout>
