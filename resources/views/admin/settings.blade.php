@extends("layouts.app")
@section("dashboard")
<div class="row">
    <div class="col-md8 mx-auto">
        <div class="card">
            <div class="card-header">

                Create configurations for each academic year
                <div class="row">
                    <div class="col-12">

                        <form method="post" action="{{route("saveSettings")}}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-3 col-md-3">
                                    <label class="form-check-label" id="academic_year">Academic year</label>
                                    <input type="text" class="form-control form-control-lg" name="academic_year" id="academic_year" required>
                                </div>
                                 <div class="col-3 col-md-3">
                                     <label class="form-check-label" id="reporting_date">Reporting date</label>
                                     <input type="date" class="form-control form-control-lg" name="reporting_date" required>
                                </div>

                                <div class="col-3 col-md-3">
                                     <label class="form-check-label" id="headteacher_name">Headteacher name</label>
                                     <input type="text" class="form-control form-control-lg" name="headteacher_name" required>
                                </div>

                                <div class="col-3 col-md-3">
                                    <button class="btn btn-primary w-100 btn-lg" type="submit">Save Settings</button>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <div class="card-body">

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Academic year</th>
                        <th>Reporting date</th>
                        <th>Headteacher</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($settings as $item)

                        <tr>
                            <td>{{$item->academic_year}}</td>
                            <td>{{$item->reporting_date}}</td>
                            <td>{{$item->headteacher_name}}</td>
                            <td>
                                <a class="btn btn-link text-danger" href="{{route("deleteSettings",$item->id)}}" onclick="return confirm('do you want to delete this configuration?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection
