@extends('backend.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Number of Pataint</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h1 class="small text-white stretched-link" href="#">{{ $totalPataint }}</h1>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Number of Appointment</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">{{ $totalAppointment }}</a>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Number of doctors</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">{{ $totalDoctor }}</a>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Number of Specialist</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">{{ $totalSpecialist }}</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">

            </div>

        </div>
        <div class="card mb-4">


        </div>
    </div>
</main>
@endsection
