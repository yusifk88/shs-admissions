@extends("layouts.app")

@section("dashboard")

    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">All students <span>| All time</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$all_students}}</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">Total Admitted <span>| All time</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$admitted_students}}</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">

                        <div class="card-body">
                            <h5 class="card-title">Outstanding students <span>| All time</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$outstanding_students}}</h6>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">


                        <div class="card-body pb-0">
                            <h5 class="card-title">Recent Admissions <span>| {{$recent_admissions->count()}} Students</span></h5>

                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Academic year</th>
                                    <th scope="col " class="text-center">Aggregate</th>
                                    <th scope="col">Programme</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($recent_admissions as $student)
                                <tr>
                                    <th scope="row"><a href="#"><img src="{{$student->photo_url}}" alt=""></a></th>
                                    <td><a target="_blank" href="{{route("print",$student->uuid)}}" class="text-primary fw-bold">{{$student->name}}</a></td>
                                    <td>{{$student->academic_year}}</td>
                                    <td class="fw-bold text-center">{{$student->aggregate}}</td>
                                    <td>{{$student->programme}}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>

                            <a href="{{route("students")}}">View All</a>
                        </div>

                    </div>
                </div><!-- End Top Selling -->

            </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">


                <div class="card-body">
                    <h5 class="card-title">Recent Preferences <span>| Today</span></h5>

                    <div class="activity">

                        <div class="activity-item d-flex">
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                               Academic Year:  <a href="#" class="fw-bold text-dark">{{$settings->academic_year}}</a>
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                            <div class="activity-content">
                                Headteacher:  <a href="#" class="fw-bold text-dark">{{$settings->headteacher_name}}</a>
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                            <div class="activity-content">
                                Reporting date:  <a href="#" class="fw-bold text-dark">{{$settings->reporting_date}}</a>
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                            <div class="activity-content">
                              <a href="{{route("settings")}}" class="btn btn-link text-primary w-100">Go to preferences</a>
                            </div>
                        </div><!-- End activity item-->


                    </div>

                </div>
            </div><!-- End Recent Activity -->


    </div>

@endsection
