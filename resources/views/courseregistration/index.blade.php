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

           {{-- @extends('unitlist.index') --}}
           <section class=" sm:px-6 lg:px-8 flex-col  sm:flex-row mt-8 border-4 border-green-500 rounded m-4"> 
            <div class="display-block  pb-4 mb-4 flex-col">
                <h2 class="font-sans antialiased font-bold px-1 m-3 text-x">COURSE REGISTRATION</h2>
                <h6 class="font-bold px-1 mx-3">Registration Semester : <span class="text-green-500 fw-1000 text-sm">SEM1-23/24</span></h6>
            </div><hr class="">
            <div class="m-3  px-1 pb-4 mb-4">
                <h6 class="font-bold text-red-600 text-xs"><i>Click on the button <span><u>"Get Courses to Register"</u></span>. Select your Courses and click button <span><u>"Add Selected Courses to the Basket"</u></span>, 
                    Confirm them then Complete registration by clicking button <span><u>"Complete Registration."</u></span> You can view Proforma Invoice by clicking button <span><u>"View Proforma Invoice"</u></span></i></h6>
            </div><hr class="">
            <div class="bg-gray-400 px-1 m-3 py-4">
                <div class="display-block">
                    <h2 class="font-sans antialiased font-bold px-1 mt-3 text-x">Filters</h2>
                </div>
                <hr class="mt-3 mb-3 text-white h-50">
                <div class="my-3">
                    <form action="" method="post">
                        <h2 class="font-bold">Registration Type</h2>
                        <select name="" id="" class="width-50 border border-blue rounded p4 text-xs p-4" style="width:30%; box-shadow: 2px 2px 4px rgb(2, 2, 175)"  >
                            <option value="none">---------</option>
                            <option value="normal">Normal</option>
                            <option value="supplementary">Supplementary</option>
                            <option value="retake">Retake</option>
                        </select>
                        <hr class="mt-3 mb-3 text-white">
                        <button type="submit" class="mybtn btn bg-red-700 rounded shadow-x text-white p-2 px-4" >Get Units</button>
                    </form>
                </div>
            </div><hr class="my-4">
            <div class="mt-3">
                <div class="display-block">
                    <h2 class="font-sans antialiased font-bold  m-3 text-xl">{{$title1}}</h2>
                </div>
                @if (count($unitlists)>=1)
                <table  class="table table-hover">
                
                <thead class="bg-black text-white rounded">
                    <tr>
                    <th scope="col">PROGRAMME</th>
                    <th scope="col">UNIT</th>
                    <th scope="col">UNIT NAME</th>
                    <th scope="col">STAGE</th>
                    <th scope="col">SEMESTER</th>
                    <th scope="col" colspan="2" align="center" class="">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unitlists as $unit)
                    <tr>
                    <td>{{$unit->programme}}</td>
                    <td>{{$unit->unit}}</td>
                    <td>{{$unit->unit_name}}</td>
                    <td>{{$unit->stage}}</td>
                    <td>{{$unit->semester}}</td>
                   {{--  @if (!Auth::guest()) 
                        @if(Auth::user()->id==$unit->id) --}}
                       {{--  <td><a href="./unitregistration/{{$unit->id}}/show" class="btn text-white" style="background-color: rgb(197, 8, 8); box-shadow:2px 2px 3px black">Drop</a></td> --}}
                        {{-- <td><a href="./unitregistration/{{$unit->id}}/show" class="btn btn-danger">View</a></td> --}}
                        {{-- <td><a href="#" class="btn btn-success">Edit</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td> --}}
                        <td align="center">{!!Form::open(['action'=> ['App\Http\Controllers\UnitListController@destroy', $unit->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('DROP', ['class' => 'mybtn btn  bg-red-700 text-white border' ])}}
                            {!!Form::close()!!}
                        </td> 
                   {{--  @endif
                @endif --}}
                    </tr>
                    @endforeach
                </tbody>
                </table>
                @endif
            </div>
        </section>
        <hr>
        </div>
    </div>
</x-app-layout>
