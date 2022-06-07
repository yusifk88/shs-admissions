@extends("layouts.public")
@section("contents")
<div style="page-break-after: always">
    <div class="row mb-3 d-print-none">
        <div class="col-12">
            <a href="/" class="btn btn-outline-primary btn-lg">Go Home</a>
            <button onclick="window.print()" class="btn btn-primary btn-lg">Print</button>
        </div>
    </div>
    <div class="row bg-success">
        <div class="col-10 col-md-10 mx-auto bg-success text-light text-center p-2">
            <h2>QUEEN OF PEACE SENIOR HIGH SCHOOL</h2>
        </div>


    </div>
    <div class="row">

        <div class="col-10 col-md-10 mx-auto  text-center mt-2">
            <h4 class="italic" style="font-style: italic;"><em>P.O.Box 27,Nadowli-UWR,Ghana, West Africa</em></h4>
        </div>
        <div class="col-5 col-md-5 mx-auto text-right" style="text-align: right">
           <h5>Website:http://qpshs.edu.gh</h5>

        </div>

        <div class="col-2 col-md-2 mx-auto ">
           <img src="/img/crest.png" class="img img-fluid">

        </div>

         <div class="col-5 col-md-5 mx-auto ">
           <h5> Website:http://qpshs.edu.gh</h5>

        </div>


    </div>
    <div class="row mt-4">
        <div class="col-12 col-md-12 text-center">
            <h4>Ghana Education Service &nbsp;&nbsp;&nbsp;&nbsp; Date:{{\Carbon\Carbon::now()->format("d-M-Y")}}</h4>

        </div>
    </div>


  <div class="row">
        <div class="col-md-12">

            <h2 class="mt-5">ADMISSION LETTER</h2>
        </div>
    </div>

  <div class="row">
        <div class="col-md-12">

            <p>Dear {{$student->name}},</p>
            <p>I am happy to inform you that you have been offered admission into Queen of Peace Senior High School to pursue <strong>{{$student->programme}}</strong>
                programme.
            </p>

            <p>
                You are expected to report on <strong>{{$settings->reporting_date}}</strong>, as a <strong>{{$student->status}} student</strong>.

            </p>
            <p>
                An acceptance letter is available for you and your parent/guardian to sign(Read carefully).
            </p>
            <p>
                The General Administration of Queen of Peace Senior High congratulates you and wishes you a happy stay on campus.
            </p>
        </div>


    </div>

    <div class="row">
        <div class="col-8 col-md-10">

        </div>
        <div class="col-4 col-md-2 text-center">
            Signed<br>
            <strong>..........................</strong><br>
            <strong>{{$settings->headteacher_name}}</strong><br>
            <small>(Headteacher)</small>

        </div>
    </div>
</div>





    <div style="page-break-after: auto">



        <div class="row bg-success mt-5">
        <div class="col-10 col-md-10 mx-auto bg-success text-light text-center p-2">
            <h2>QUEEN OF PEACE SENIOR HIGH SCHOOL</h2>
        </div>


    </div>
    <div class="row">

        <div class="col-10 col-md-10 mx-auto  text-center mt-2">
            <h4 class="italic" style="font-style: italic;"><em>P.O.Box 27,Nadowli-UWR,Ghana, West Africa</em></h4>
        </div>
        <div class="col-5 col-md-5 mx-auto text-right" style="text-align: right">
           <h5>Website:http://qpshs.edu.gh</h5>

        </div>

        <div class="col-2 col-md-2 mx-auto ">
           <img src="/img/crest.png" class="img img-fluid">

        </div>

         <div class="col-5 col-md-5 mx-auto ">
           <h5> Website:http://qpshs.edu.gh</h5>

        </div>


    </div>


        <div class="row mt-4">
            <div class="col-6 col-md-6 text-center">
            </div>
            <div class="col-6 col-md-6 text-center">
                <h5>Ghana Education Service</h5>
                <h4>Date:{{\Carbon\Carbon::now()->format("d-M-Y")}}</h4>

            </div>
        </div>


        <div class="row mt-4">

            <div class="col-10 col-md-10">
                <h2 style="text-decoration: underline">LETTER OF ACCEPTANCE</h2>
                <h2 style="text-decoration: underline">CSSPS {{$student->academic_year}}</h2>
                <h4 style="text-decoration: underline">PLEASE NOT THE FOLLOWING:</h4>
            </div>
            <div class="col-2">
                <img src="{{$student->photo_url}}" class="img img-fluid img-thumbnail">
            </div>

        </div>
        <div class="row">
            <div class="col-12">

                    <h3 class="bold mt-3" style="font-weight: bold; margin-left: 25px;">1. UNIQUE CHARACTER OF SCHOOL:</h3>
                <p>
                    Queen of Peace Senior High School is a <span style="text-decoration: underline; font-weight: bold;font-style: italic">Catholic Institution</span> that places emphasis on <span style="text-decoration: underline; font-weight: bold; font-style: italic">discipline, morality, academic excellence and Catholic Spirituality/Tradition.</span>
                </p>

            </div>


            <div class="col-12 col-md-12">

                <h3 class="bold mt-3" style="font-weight: bold; margin-left: 25px;">2. MOBILE PHONES AND ELECTRICAL GADGETS:</h3>
                <p>
                    Mobile phones and electrical gadgets are not permitted in boarding schools. Any student caught with any of such gadgets would suffer a penalty of  <span style="font-weight: bold">INDEFINITE SUSPENSION.</span>
                </p>
                <p>
                    I, <strong>{{strtoupper($student->name)}}</strong> have read the above words of caution of Queen of Peace Senior High School, Nadowli. I wholeheartedly pledge to abide by them and Code of Discipline for Senior High Schools and Technical Institutions in Ghana.
                </p>


                <p>
                    NAME OF STUDENT:<strong>{{strtoupper($student->name)}}</strong>

                </p>

                <p>
                   FOLIO NO:..........................HOUSE:..........................................................

                </p>
                <p>
                   SIGNATURE OF STUDENT:..............................................................................

                </p>

                <p>
                   NAME OF PARENT/GUARDIAN:<strong>{{strtoupper($student->father_name)}}</strong>

                </p>
                <p>
                    SIGNATURE OF PARENT/GUARDIAN:................................................CONTACT NO:<strong>{{$student->father_phone_number}}</strong>

                </p>

                <p>
                    HEADMISTRESS'S STAMP

                </p>


            </div>


        </div>

        <div class="row">
            <div class="col-8">

            </div>
            <div class="col-4">
                <p>...................................................</p>
            </div>
        </div>



    </div>



<div style="page-break-after: auto">
<div class="row">

    <div class="col-8">

    </div>
    <div class="col-4">
        <img src="/img/material.png" class="img img-fluid">
    </div>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        <h2>PROSPECTUS FOR SENIOR HIGH SCHOOLS<br>UPPER WEST REGION<br>QUEEN OF PEACE SENIOR HIGH SCHOOL,NADOWLI</h2>
    </div>

</div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th colspan="2">BOYS</th>
                    <th colspan="2">GIRLS</th>
                </tr>
                <tr>
                    <th>

                    </th>

                    <th>
                        ITEM
                    </th>

                    <th>
                        QTY
                    </th>


                    <th>
                        ITEM
                    </th>

                    <th>
                        QTY
                    </th>

                </tr>
                </thead>
                <tbody>
                <?php
                $i=1;
                ?>
                @foreach($items as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->item}}</td>
                    <td>{{$item->boys_quantity}}</td>
                    <td>{{$item->item}}</td>
                    <td>{{$item->girls_quantity}}</td>
                </tr>

                @endforeach
                </tbody>
            </table>
        </div>

    </div>


</div>


<div style="page-break-before: always">
<div class="row mt-5">
    <div class="col-10 text-center">
        <h2>
            QUEEN OF PEACE SENIOR HIGH SCHOOL
        </h2>
        <h4>P.O.Box 27,Nadowli-UWR,Ghana, West Africa</h4>
        <h5><strong>CLASSES AND THEIR RESPECTIVE ELECTIVE SUBJECTS</strong></h5>
    </div>
    <div class="col-2">
        <img src="/img/crest.png" class="img img-fluid">
    </div>
</div>

<div class="row">

    <div class="col-12 text-center">
        <h2 class="mt-4" style="text-decoration: underline; font-weight: bold">GENERAL ARTS</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>CLASS</th>
                <th colspan="4">SUBJECT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1A1</td>
                <td>ECONOMICS</td>
                <td>GEOGRAPHY</td>
                <td>ELECTIVE MATHS</td>
                <td>CRAS</td>
            </tr>
              <tr>
                <td>1A2</td>
                <td>ECONOMICS</td>
                <td>GEOGRAPHY</td>
                <td>ELECTIVE MATHS</td>
                <td>ELECTIVE ICT</td>
            </tr>
                 <tr>
                <td>1A3</td>
                <td>HISTORY</td>
                <td>GEOGRAPHY</td>
                <td>LIT</td>
                <td>CRS</td>
            </tr>


                 <tr>
                <td>1A4</td>
                <td>ECONOMICS</td>
                <td>DAGAARE</td>
                <td>GOVERNMENT</td>
                <td>CRS</td>
            </tr>

                 <tr>
                <td>1A5</td>
                <td>ECONOMICS</td>
                <td>GEOGRAPHY</td>
                <td>FRENCH</td>
                <td>GOVERNMENT</td>
            </tr>

                 <tr>
                <td>1A6</td>
                <td>ECONOMICS</td>
                <td>GEOGRAPHY</td>
                <td>FRENCH</td>
                <td>HISTORY</td>
            </tr>

                 <tr>
                <td>1A7</td>
                <td>ECONOMICS</td>
                <td>GEOGRAPHY</td>
                <td>ELECTIVE MATHS</td>
                <td>GOVERNMENT</td>
            </tr>


            </tbody>

        </table>
    </div>
    <div class="col-12 text-center">
        <h2 style="text-decoration: underline; font-weight: bold" class="mt-4">GENERAL SCIENCE</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>CLASS</th>
                <th colspan="4">SUBJECT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1C1</td>
                <td>CHEMISTRY</td>
                <td>PHYSICS</td>
                <td>BIOLOGY</td>
                <td>ELECTIVE MATHS</td>
            </tr>

    <tr>
                <td>1C2</td>
                <td>CHEMISTRY</td>
                <td>PHYSICS</td>
                <td>ELECTIVE ICT</td>
                <td>ELECTIVE MATHS</td>
            </tr>


            </tbody>

        </table>
    </div>
    <div class="col-12 text-center">
        <h2 style="text-decoration: underline; font-weight: bold" class="mt-4">HOME SCIENCE</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>CLASS</th>
                <th colspan="4">SUBJECT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1H1</td>
                <td>FOOD & NUTRITION</td>
                <td>MANAGEMENT IN LIVING</td>
                <td>ECONOMICS</td>
                <td>BIOLOGY</td>
            </tr>

    <tr>
                <td>1H2</td>
                <td>CLOTHING & TEXTILE</td>
                <td>MANAGEMENT IN LIVING</td>
                <td>ECONOMICS</td>
                <td>BIOLOGY</td>
            </tr>


            </tbody>

        </table>
    </div>
</div>
    <div style="page-break-before: always">
    <div class="col-12 text-center">
        <h2 style="text-decoration: underline; font-weight: bold" class="mt-4">BUSINESS</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>CLASS</th>
                <th colspan="4">SUBJECT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1B1</td>
                <td>FINANCIAL ACCOUNTING</td>
                <td>ELECTIVE MATHS</td>
                <td>ECONOMICS</td>
                <td>IBM</td>
            </tr>

    <tr>
                <td>1H2</td>
        <td>FINANCIAL ACCOUNTING</td>
                <td>COST ACCOUNTING</td>
                <td>ECONOMICS</td>
                <td>IBM</td>
            </tr>

    <tr>
                <td>1H3</td>
        <td>FINANCIAL ACCOUNTING</td>
                <td>ELECTIVE ICT</td>
                <td>ECONOMICS</td>
                <td>IBM</td>
            </tr>


            </tbody>

        </table>
    </div>
</div>


</div>

<div class="row mb-3 d-print-none">
    <div class="col-12">
        <a href="/" class="btn btn-outline-primary btn-lg">Go Home</a>
        <button onclick="window.print()" class="btn btn-primary btn-lg">Print</button>
    </div>
</div>


@endsection
