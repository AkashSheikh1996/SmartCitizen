<title>All Patients</title>

@extends('admin/layouts.adminapp')


@section('content')


<div class="container">
<div class="row justify-content-center">
        
        <div class="col-sm-12">
        <h6 class="text-center" style="font-weight: bold;">All Patients!</h6> 
        <form class="text-left border border-light">
                    <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Phone</th>                     
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patient->reverse() as $value)
                                            <tr>                                              

                                                <td>{{$value->name}}</td>                                   
                                                <td>{{$value->age}}</td> 
                                                <td>{{$value->email}}</td>                                   
                                                <td>{{$value->address}}</td>  

                                                <td>{{$value->gender}}</td>    
                                                <td>{{$value->phone}}</td>                                     
                                                                                                                                            
                                            </tr>

                                @endforeach              
                                </tbody>
                            </table>
                    </div>
                </form> 
                         
        </div>
    </div>
</div>


@endsection