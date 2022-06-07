@extends("layouts.app")
@section("dashboard")

<div class="row">
    <div class="col-8 mx-auto">

        <div class="card">
            <div class="card-header">
                Manage Prospectus Items
            </div>
            <div class="card-body">

                <form action="{{route("saveitem")}}" method="post">
                    {{csrf_field()}}
                    <div class="row mb-4">
                        <strong>Create new item:</strong>
                        <div class="col-md-6">

                            <label class="form-check-label" for="academic_year">Academic Year</label>
                            <input type="text" id="academic_year" name="academic_year" required class="form-control form-control-lg">
                        </div>

                          <div class="col-md-6">
                            <label class="form-check-label" for="item">Item Name</label>
                            <input type="text" id="item" name="item" required class="form-control form-control-lg">
                        </div>

                          <div class="col-md-6">
                            <label class="form-check-label" for="boys_quantity">Quantity for Boys</label>
                            <input type="number" id="boys_quantity" name="boys_quantity" required class="form-control form-control-lg">
                        </div>

                          <div class="col-md-6">
                            <label class="form-check-label" for="boys_quantity">Quantity for Girls</label>
                            <input type="number" id="girls_quantity" name="girls_quantity" required class="form-control form-control-lg">
                        </div>

                        <div class="col-md-6 mt-3">

                            <button class="btn btn-primary btn-lg w-100" type="submit">Save</button>
                        </div>

                    </div>


                </form>


                <strong>Existing items:</strong>

                <table class="table table-bordered table-hover table-striped">

                    <thead>
                    <tr>
                        <th colspan="2">S/N</th>
                        <th colspan="2">BOYS</th>
                        <th colspan="2">GIRLS</th>
                        <th>ACTION</th>
                    </tr>
                      <tr>
                        <th></th>
                        <th>Academic Year</th>
                        <th>Item</th>
                        <th>QTY</th>

                          <th>Item</th>
                        <th>QTY</th>
                          <th></th>


                      </tr>

                    </thead>
                    <tbody>

                    <?php
                        $i=1;
                    ?>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$i++}}</td>

                        <td>{{$item->academic_year}}</td>
                        <td>{{$item->item}}</td>
                        <td>{{$item->boys_quantity}}</td>

                        <td>{{$item->item}}</td>
                        <td>{{$item->girls_quantity}}</td>
                        <td>
                            <a class="btn btn-link text-danger" href="{{route("deleteitem",$item->id)}}" onclick="return confirm('Are you sure you want to delete this item?' )">Delete</a>
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
