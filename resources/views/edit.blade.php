<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('update/'.$datas->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}

        <label>leader_name</label>
        <input type="text" name="leader_name" value="{{$datas->leader_name}}"><br>

        <label>leader_address</label>
        <input type="text" name="leader_address" value="{{$datas->leader_address}}"><br>

        <label>leader_email</label>
        <input type="email" name="leader_email" value="{{$datas->leader_email}}"><br>

        <label>leader_birthplace</label>
        <input type="text" name="leader_birthplace" value="{{$datas->leader_birthplace}}"><br>

        <label>leader_birthdate</label>
        <input type="date" name="leader_birthdate" value="{{$datas->leader_birthdate}}"><br>

        <label>leader_number</label>
        <input type="tel" name="leader_number" value="{{$datas->leader_number}}"><br>

        <label>leader_line</label>
        <input type="text" name="leader_line" value="{{$datas->leader_line}}"><br>

        <label>leader_github</label>
        <input type="text" name="leader_github" value="{{$datas->leader_github}}"><br>

        <label>leader_cv</label>
        <input type="file" name="leader_cv"><br>
        
        <label>leader_project</label>
        <input type="file" name="leader_project"><br>

        <label>member1_name</label>
        <input type="text" name="member1_name" value="{{$datas->member1_name}}"><br>

        <label>member1_address</label>
        <input type="text" name="member1_address" value="{{$datas->member1_address}}"><br>

        <label>member1_email</label>
        <input type="email" name="member1_email" value="{{$datas->member1_email}}"><br>

        <label>member1_birthplace</label>
        <input type="text" name="member1_birthplace" value="{{$datas->member1_birthplace}}"><br>

        <label>member1_birthdate</label>
        <input type="date" name="member1_birthdate" value="{{$datas->member1_birthdate}}"><br>

        <label>member1_number</label>
        <input type="tel" name="member1_number" value="{{$datas->member1_number}}"><br>

        <label>member1_line</label>
        <input type="text" name="member1_line" value="{{$datas->member1_line}}"><br>

        <label>member1_github</label>
        <input type="text" name="member1_github" value="{{$datas->member1_github}}"><br>

        <label>member1_cv</label>
        <input type="file" name="member1_cv"><br>

        <label>member1_project</label>
        <input type="file" name="member1_project"><br>

        <label>member2_name</label>
        <input type="text" name="member2_name" value="{{$datas->member2_name}}"><br>

        <label>member2_address</label>
        <input type="text" name="member2_address" value="{{$datas->member2_address}}"><br>

        <label>member2_email</label>
        <input type="email" name="member2_email" value="{{$datas->member2_email}}"><br>

        <label>member2_birthplace</label>
        <input type="text" name="member2_birthplace" value="{{$datas->member2_birthplace}}"><br>

        <label>member2_birthdate</label>
        <input type="date" name="member2_birthdate" value="{{$datas->member2_birthdate}}"><br>

        <label>member2_number</label>
        <input type="tel" name="member2_number" value="{{$datas->member2_number}}"><br>

        <label>member2_line</label>
        <input type="text" name="member2_line" value="{{$datas->member2_line}}"><br>

        <label>member2_github</label>
        <input type="text" name="member2_github" value="{{$datas->member2_github}}"><br>

        <label>member2_cv</label>
        <input type="file" name="member2_cv"><br>

        <label>member2_project</label>
        <input type="file" name="member2_project"><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>