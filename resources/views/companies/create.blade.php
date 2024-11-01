@extends('layouts.public')

@section('content')  
{{-- yeild content {thing} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"> Create A company</div>
                    <div class="card-body">

                        <form action="/companies" method="post">
                            @csrf  <!-- read about it -->
                            <label for="company"> Company </label>
                            <input type="text" class="form-control" name="company" title="company"/>
                            <input type="submit" value="Add Company" class="btn btn-primary btn-lg btn-block" style="margin-top:20px"/>

                        </form>
                    </div>


                </div>

            </div> <!-- .col-md-8 -->
        </div>
    </div>


@endsection

@section('styles')
@endsection

@section('scripts')
@endsection

