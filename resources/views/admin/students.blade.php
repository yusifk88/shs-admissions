@extends("layouts.app")


@section("dashboard")
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="row">
                                    <div class="col-8">
                                        <input value="{{isset($_GET['name']) ? $_GET['name'] : ''}}" required type="search" name="name" class="form-control form-control-lg" placeholder="Search by name">
                                    </div>

                                    <div class="col-4">

                                        <button class="btn btn-primary btn-lg w-100" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-2 col-md-2">
                            Students from CSSP
                        </div>
                        <div class="col-10 col-md-10">
                            <form action="{{route("importStudents")}}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                                <div class="row">
                                    <div class="col-4 col-md-4">
                                    <input placeholder="Enter academic year eg. 2021/2022" required name="academic_year" class="form-control form-control-lg">
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <input name="students" required type="file" class="form-control form-control-lg"
                                               accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                        >

                                    </div>
<div class="col-4 col-md-4">
    <button class="btn btn-primary btn-lg w-100">Upload</button>

</div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>

                        <tr>
                            <th>
                                Photo
                            </th>

                            <th>
                                Name
                            </th>

                            <th>
                                Gender
                            </th>

                            <th>
                                Index Number
                            </th>

                            <th class="text-center">
                                Aggregate
                            </th>

                            <th>
                                Programme
                            </th>

                            <th>
                                Track
                            </th>

                            <th>
                                Status
                            </th>


                            <th>
                                Father's name
                            </th>

                            <th>
                                Father's Phone Number
                            </th>

                            <th>
                                Mother's name
                            </th>

                            <th>
                                Mother's Phone Number
                            </th>

                            <th>
                                Academic Year
                            </th>


                        </tr>
                        </thead>
                        <tbody>

                            @foreach($students as $student)

                                <tr>
                                    <td>
                                        <img src="{{$student->photo_url ?: '/img/photo.png'}}" class="img-thumbnail img-fluid">
                                    </td>

                                    @if($student->father_name)
                                        <td>
                                            <a target="_blank" class="btn btn-link text-success" href="{{route("print",$student->uuid)}}">
                                                {{$student->name}}

                                            </a>
                                        </td>
                                    @else
                                        <td>
                                        {{$student->name}}
                                    </td>
                                    @endif


                                    <td>
                                        {{$student->gender}}
                                    </td>


                                    <td>
                                        {{$student->index_number}}
                                    </td>

                                    <td class="text-center">
                                        {{$student->aggregate}}
                                    </td>

                                    <td>
                                        {{$student->programme}}
                                    </td>


                                    <td>
                                        {{$student->track}}
                                    </td>


                                    <td>
                                        {{$student->status}}
                                    </td>


                                    <td>
                                        {{$student->father_name}}
                                    </td>


                                    <td>
                                        {{$student->father_phone_number}}
                                    </td>



                                    <td>
                                        {{$student->mother_name}}
                                    </td>


                                    <td>
                                        {{$student->mother_phone_number}}
                                    </td>

                                    <td>
                                        {{$student->academic_year}}
                                    </td>


                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                    {{$students->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
