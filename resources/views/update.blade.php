@extends("layouts.public")
@section("contents")

    <div class="row">
        <div class="col-md-8 mx-auto border-bottom">
            <h2 class="text-muted">Hello <strong>{{$student->name}}</strong>, please provide the rest of your
                information to proceed</h2>
        </div>

        <div class="col-md-8 mx-auto mt-4">
            <div class="card">
                <div class="card-header">
                    Other information required
                </div>
                <div class="card-body">

                    <form action="{{route("update",$student->uuid)}}" method="post" enctype="multipart/form-data">

                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="text-muted">Upload your photo</p>

                                <img id="photo_preview" src="/img/photo.png" class="img img-fluid img-thumbnail">
                                <input name="photo" id="fileSelector" onchange="setPreview(event)" type="file" accept="image/*" capture class="d-none">
                                <button onclick="selectPhoto()" type="button" class="btn btn-outline-primary w-100">Select photo</button>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-12">
                                <h3>Parent/Guardian's information</h3>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label for="father_name">Father's name</label>
                                <input required name="father_name" id="father_name"
                                       class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6">
                                <label for="father_phone_number">Father's phone number</label>
                                <input required name="father_phone_number" id="father_phone_number"
                                       class="form-control form-control-lg">
                            </div>

                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="father_name">Mother's name</label>
                                <input required name="mother_name" id="mother_name"
                                       class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6">
                                <label for="father_phone_number">Mother's phone number</label>
                                <input required name="mother_phone_number" id="mother_phone_number"
                                       class="form-control form-control-lg">
                            </div>

                        </div>


                        <div class="row mt-3">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-lg w-100">Update & continue</button>
                            </div>
                        </div>

                    </form>


                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h3>Other information</h3>
                        </div>
                    </div>


                    <table class="table table-striped table-hover">

                        <thead>
                        <tr>
                            <th>Label</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <th>
                                Academic Year:
                            </th>

                            <td>
                                {{$student->academic_year}}
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Name:
                            </th>

                            <td>
                                {{$student->name}}
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Gender:
                            </th>

                            <td>
                                {{ucfirst($student->gender)}}
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Aggregate:
                            </th>

                            <td>
                                {{$student->aggregate}}
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Programme:
                            </th>

                            <td>
                                {{$student->programme}}
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Track:
                            </th>

                            <td>
                                {{$student->track}}
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script>

        function setPreview(e){

            const preview = document.getElementById("photo_preview");

            const photo =e.target.files[0];
            const fr = new FileReader();
            fr.readAsDataURL(photo);
            fr.onload=function (){

                preview.setAttribute("src",fr.result);
            }

        }

       function selectPhoto(){

           document.getElementById("fileSelector").click();

        }


    </script>
@endsection
