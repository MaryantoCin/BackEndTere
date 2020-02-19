@extends('layouts.app')
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Leader Name</th>
            <th>Leader Address</th>
            <th>Leader Email</th>
            <th>Leader Birth Date</th>
            <th>Leader Birth Place</th>
            <th>Leader Number</th>
            <th>Leader Line</th>
            <th>Leader Github</th>
            <th>Leader CV</th>
            <th>Leader Project</th>
            <th>Member1 Name</th>
            <th>Member1 Address</th>
            <th>Member1 Email</th>
            <th>Member1 Birth Date</th>
            <th>Member1 Birth Place</th>
            <th>Member1 Number</th>
            <th>Member1 Line</th>
            <th>Member1 Github</th>
            <th>Member1 CV</th>
            <th>Member1 Project</th>
            <th>Member2 Name</th>
            <th>Member2 Address</th>
            <th>Member2 Email</th>
            <th>Member2 Birth Date</th>
            <th>Member2 Birth Place</th>
            <th>Member2 Number</th>
            <th>Member2 Line</th>
            <th>Member2 Github</th>
            <th>Member2 CV</th>
            <th>Member2 Project</th>
            <th>Edit</th>
        </thead>
        <tbody>
            @foreach($datas as $data)
            @if($data->email != "eeo@bncc.net")
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->leader_name}}</td>
                    <td>{{$data->leader_address}}</td>
                    <td>{{$data->leader_email}}</td>
                    <td>{{$data->leader_birthdate}}</td>
                    <td>{{$data->leader_brithplace}}</td>
                    <td>{{$data->leader_number}}</td>
                    <td>{{$data->leader_line}}</td>
                    <td>{{$data->leader_github}}</td>
                    <td>
                    @if($data->leader_cv != null)
                        <form action="{{route('adl.leader_cv',$data)}}" method="get">
                            @csrf
                            <button type="submit">Download leader_cv</button>
                        </form>
                    @endif
                    </td>
                    <td>
                    @if($data->leader_project != null)
                        <form action="{{route('adl.leader_project',$data)}}" method="get">
                            @csrf
                            <button type="submit">Download leader_project</button>
                        </form>
                    @endif
                    </td>
                    <td>{{$data->member1_name}}</td>
                    <td>{{$data->member1_address}}</td>
                    <td>{{$data->member1_email}}</td>
                    <td>{{$data->member1_birthdate}}</td>
                    <td>{{$data->member1_birthplace}}</td>
                    <td>{{$data->member1_number}}</td>
                    <td>{{$data->member1_line}}</td>
                    <td>{{$data->member1_github}}</td>
                    <td>
                    @if($data->member1_cv != null)
                        <form action="{{route('adl.member1_cv',$data)}}" method="get">
                            @csrf
                            <button type="submit">Download member1_cv</button>
                        </form>
                    @endif
                    </td>
                    <td>
                    @if($data->member1_project != null)
                        <form action="{{route('adl.member1_project',$data)}}" method="get">
                            @csrf
                            <button type="submit">Download member1_project</button>
                        </form>
                    @endif
                    </td>
                    <td>{{$data->member2_name}}</td>
                    <td>{{$data->member2_address}}</td>
                    <td>{{$data->member2_email}}</td>
                    <td>{{$data->member2_birthdate}}</td>
                    <td>{{$data->member2_birthplace}}</td>
                    <td>{{$data->member2_number}}</td>
                    <td>{{$data->member2_line}}</td>
                    <td>{{$data->member2_github}}</td>
                    <td>
                    @if($data->member2_cv != null)
                        <form action="{{route('adl.member2_cv',$data)}}" method="get">
                            @csrf
                            <button type="submit">Download member2_cv</button>
                        </form>
                    @endif
                    </td>
                    <td>
                    @if($data->member2_project != null)
                        <form action="{{route('adl.member2_project',$data)}}" method="get">
                            @csrf
                            <button type="submit">Download member2_project</button>
                        </form>
                    @endif
                    </td>
                    <td>
                        <form action="{{route('admin.edit',$data)}}" method="get">
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
