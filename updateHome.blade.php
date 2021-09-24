@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Update Info</title>

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


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .row {
                background-color: #80C2B6;
                margin: auto;
                margin-top: auto;
                max-width: 400px;
                border-radius: 10px;
                border-top-width: 60px;
                border-bottom-width: 20px;
                padding: 5px;
                width: auto;
            }
            h4 {
                text-align: center;
                padding: 10px;
            }
            .pull-center{
                text-align: center;
                margin-top: 14px;
                width: 250px;
            }
        </style>
    </head>

    <body>

        <div class="container mt-2">
            <div class="row">

                <h4>อัปเดตข้อมูลเเพะเพิ่มเติม</h4>

                <div class="pull-center row">
                    <a class="btn btn-light"
                    href="{{ route('goats.health') }}">ข้อมูลสุขภาพ</a>
                </div>

                <div class="pull-center row">
                    <a class="btn btn-light"
                    href="{{ route('goats.vaccination') }}">ข้อมูลการฉีดวัคซีน</a>
                </div>

                <div class="pull-center row">
                    <a class="btn btn-light"
                    href="{{ route('goats.weight') }}">ข้อมูลการเจริญเติบโต</a>
                </div>

                <div class="pull-center row">
                    <a class="btn btn-light"
                    href="{{ route('goats.medical') }}">ข้อมูลการตรวจโรคประจำปี</a>
                </div>

                <div class="pull-center row">
                    <a class="btn btn-light"
                    href="{{ route('goats.breed') }}">ข้อมูลการผสมพันธุ์ของแม่พันธ์ุ</a>
                    <div class="submit">

            </div>
            </div>

        </body>

    </html>
@endsection




<!--<div class="container mt-2">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-center mb-2">
                    <h2>Update Goat Data</h2>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.vaccineUpdate') }}"> vaccineUpdate</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.updateBreed') }}"> updateBreed</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.updateWeight') }}"> updateWeight</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.healthUpdate') }}"> healthUpdate</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.medicalUpdate') }}"> medicalUpdate</a>
                </div>
            </div>
        </div>




           <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="row mb-2">
                        <h4>อัปเดตข้อมูลเเพะ</h4>
                    </div>

                    <div class="row">
                        <a class="button" style="background-color:#eee;" href="{{ route('goats.health') }}">ข้อมูลสุขภาพ</a>
                    </div>
                    <div class="row">
                        <a class="btn " style="background-color:#eee;" href="{{ route('goats.vaccination') }}">ข้อมูลการฉีดวัคซีน</a>
                    </div>
                    <div class="row">
                        <a class="btn " style="background-color:#eee;" href="{{ route('goats.weight') }}">ข้อมูลการเจริญเติบโต</a>
                    </div>
                    <div class="row">
                        <a class="btn " style="background-color:#eee;" href="{{ route('goats.medical') }}">ข้อมูลการตรวจโรคประจำปี</a>
                    </div>
                    <div class="row">
                        <a class="btn " style="background-color:#eee;" href="{{ route('goats.breed') }}">ข้อมูลการผสมพันธุ์ของแม่พันธ์ุ</a>
                    </div>

                </div>
            </div>


    </div>-->
