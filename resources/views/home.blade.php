@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<a href="/edit">Edit</a><br>
<div style="display:flex">
<div>
    <p>ID</p>
    <p>Name</p>
    <p>Email</p>
    <p>Leader Name</p>
    <p>Leader Address</p>
    <p>Leader Email</p>
    <p>Leader Birth Date</p>
    <p>Leader Birth Place</p>
    <p>Leader Number</p>
    <p>Leader Line</p>
    <p>Leader Gipub</p>
    <p>Member1 Name</p>
    <p>Member1 Address</p>
    <p>Member1 Email</p>
    <p>Member1 Birth Date</p>
    <p>Member1 Birth Place</p>
    <p>Member1 Number</p>
    <p>Member1 Line</p>
    <p>Member1 Gipub</p>
    <p>Member2 Name</p>
    <p>Member2 Address</p>
    <p>Member2 Email</p>
    <p>Member2 Birth Date</p>
    <p>Member2 Birth Place</p>
    <p>Member2 Number</p>
    <p>Member2 Line</p>
    <p>Member2 Gipub</p>
</div>
<div>
    <p>{{$datas->id}}</p>
    <p>{{$datas->name}}</p>
    <p>{{$datas->email}}</p>
    <p>{{$datas->leader_name}}</p>
    <p>{{$datas->leader_address}}</p>
    <p>{{$datas->leader_email}}</p>
    <p>{{$datas->leader_birthplace}}</p>
    <p>{{$datas->leader_birthdate}}</p>
    <p>{{$datas->leader_number}}</p>
    <p>{{$datas->leader_line}}</p>
    <p>{{$datas->leader_github}}</p>
    <p>{{$datas->member1_name}}</p>
    <p>{{$datas->member1_address}}</p>
    <p>{{$datas->member1_email}}</p>
    <p>{{$datas->member1_birthplace}}</p>
    <p>{{$datas->member1_birthdate}}</p>
    <p>{{$datas->member1_number}}</p>
    <p>{{$datas->member1_line}}</p>
    <p>{{$datas->member1_github}}</p>
    <p>{{$datas->member2_name}}</p>
    <p>{{$datas->member2_address}}</p>
    <p>{{$datas->member2_email}}</p>
    <p>{{$datas->member2_birthplace}}</p>
    <p>{{$datas->member2_birthdate}}</p>
    <p>{{$datas->member2_number}}</p>
    <p>{{$datas->member2_line}}</p>
    <p>{{$datas->member2_github}}</p>
    </div>
</div>

@if($datas->leader_cv != null)
    <form action="{{url('download/leader_cv/'.$datas->id)}}" method="get">
        @csrf
        <button type="submit">Download leader_cv</button>
    </form>
@endif

@if($datas->leader_project != null)
    <form action="{{url('download/leader_project/'.$datas->id)}}" method="get">
        @csrf
        <button type="submit">Download leader_project</button>
    </form>
@endif

@if($datas->member1_cv != null)
    <form action="{{url('download/member1_cv/'.$datas->id)}}" method="get">
        @csrf
        <button type="submit">Download member1_cv</button>
    </form>
@endif

@if($datas->member1_project != null)
    <form action="{{url('download/member1_project/'.$datas->id)}}" method="get">
        @csrf
        <button type="submit">Download member1_project</button>
    </form>
@endif

@if($datas->member2_cv != null)
    <form action="{{url('download/member2_cv/'.$datas->id)}}" method="get">
        @csrf
        <button type="submit">Download member2_cv</button>
    </form>
@endif

@if($datas->member2_project != null)
    <form action="{{url('download/member2_project/'.$datas->id)}}" method="get">
        @csrf
        <button type="submit">Download member2_project</button>
    </form>
@endif



