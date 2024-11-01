{{-- hello  --}}
{{-- for debugging purposes  --}}

@if (Session::has('success'))
    <div class="alert alert-success" role='alert'>
        <strong> Success : </strong> {{ Session::get('success ')}}
        {{-- doulble curly braaces for php  --}}
    </div>

@endif

@if (Session::has('error'))
<div class="alert alert-danger" role='alert'>
    <strong> Error : </strong> {{ Session::get('error ')}}
</div>

@endif

@if (count($errors)>0)

    <div class="alert alert-danger" role='alert'>
        <strong> Errors : </strong> 
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}} </li>

            @endforeach
        </ul>
    </div>


@endif

    

