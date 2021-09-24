@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://unpkg.com/feather-icons"></script>
<script src="js/bootstrap.js"></script>
<script src="path/to/dist/feather.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="https://getbootstrap.com/docs/5.0/examples/carousel/carousel.css" rel="stylesheet">
<link rel="stylesheet" href="resources/css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .header{
        padding: 10px;
        margin-top: 20px;
        text-align: center;
    }
    .profile_image {
     margin: 2em;
     }
    .profile_image img {
     border-radius: 50%;
    }
    .container{
     margin-top: auto;
    }
    .row{
        position:relative;
        right: 10px;
    }
    tr:hover {background-color: #80C2B6;}

    .h2{
        margin-top: 50px;
    }

</style>
<head>
    <meta charset="UTF-8">
    <title>ทะเบียนเเพะ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
   <div class="header">
    <h2>ทะเบียนเเพะ</h2>
   </div>

    <div class="col">
    <div class="row">
        <div class="col-md-8 ">
            <!--<div class="pull-right md-2">
                <a class="btn btn-success" href="{{ route('goats.create') }}"> สร้างทะเบียนเเพะ</a>
                <a class="btn btn-primary" href="{{ route('goats.updateHome') }}"> อัปเดตข้อมูลเเพะเพิ่มเติม</a>
            </div>-->
        </div>
        <div class="col-md-3">
        <form action="{{ route('goats.search')}}" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">ค้นหา</button>
                </span>
            </div>
        </form>
        </div>

    </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container mt-2">
    <table class="table table-bordered">
        <tr>
            <th>รหัสประจำตัวเเพะ</th>
            <th>รูปภาพ</th>
            <th>ชื่อเเพะ</th>
            <th>พันธุ์</th>
            <th width="280px">Action</th>

        </tr>
        @foreach ($goats as $goat)
        <tr>
            <td>{{ $goat->goatId }}</td>
            <td><img src="{{ Storage::url($goat->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $goat->goatName }}</td>
            <td>{{ $goat->gene }}</td>
            <td>
                <form action="{{ route('goats.destroy',$goat->goatId) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('goats.edit',$goat->goatId) }}">เเก้ไขข้อมูล</a>


                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">ลบข้อมูลเเพะ</button>
                </form>

            </td>
        </tr>
        @endforeach

    </table>
    {{ $goats->links() }}
</div>


</body>

</html>
