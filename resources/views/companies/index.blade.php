@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"> Companies </div>
                <div class="card-body">
                    @php
                        // dd($companies)

                    @endphp

                    <h1 class="text-end">
                        <a href="/companies/create" class="btn btn-info" role="button">+Add New </a>

                    </h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)  {{-- left side of the with method is the variable here  --}}
                            <tr>
                                <td>{{$company->id}}</td>
                                <td>{{$company->company}}</td>
                                {{-- <td>
                                    
                                    @foreach($company->series as $series)   
                                        {{$series->name}}, 

                                    @endforeach
                                
                                
                                </td> --}}

                                <td>Edit, Delete</td>
                                

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


            </div>

        </div> <!-- .col-md-8 -->
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

