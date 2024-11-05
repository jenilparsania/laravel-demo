@extends('layouts.public')

@section('content')  
{{-- yeild content {thing} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"> Edit  Company </div>
                    <div class="card-body">
                        <form action="/companies/{{$company->id}}" method="post">
                            @csrf  <!-- read about it -->
                            <input type="hidden" name="_method"  value="PUT"/>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="company"> Company </label>
                                <input type="text" class="form-control" name="company" title="company"  value="{{ old('company',$company->company)}}"/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/companies" class="btn btn-primary btn-lg btn-block" style="margin-top:20px"> Cancel</a>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" value="Save Company" class="btn btn-primary btn-lg btn-block" style="margin-top:20px"/>

                            </div>
                        </div>


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

