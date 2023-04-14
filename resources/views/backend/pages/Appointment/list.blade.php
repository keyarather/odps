@extends('backend.master')
@section('content')
<h2>Appointment Details</h2>
<a class="btn btn-primary" href="{{route('appointment.create')}}">Add new</a>

   <table class="table table-striped">
        
           <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>
@endsection
