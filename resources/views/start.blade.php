@extends("layouts.public")
@section("contents")
    <div class="row">
        <div class="col-md-4 mx-auto">


            <div class="card mt-5">

                <div class="card-body mt-5">

                    <center>
                        <h2 class="text-muted" style="font-weight: lighter">
                            Get your admission letter in less than a minute
                        </h2>
                    </center>

                    <form action="{{route("search")}}" method="post">

                        {{csrf_field()}}
                        <label>Enter your index number</label>
                        <input name="index_number" required type="text" class="form-control form-control-lg
             @error('index_number')

                            'border-danger'
@enderror
                            ">
                        @error('index_number')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        <button class="btn btn-primary btn-lg btn-block mt-3 w-100 btn-rounded">Continue</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
