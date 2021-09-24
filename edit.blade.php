@extends('layouts.app')

@section('content')

   <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


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

            .row {
                border: 10px solid #80C2B6;
                margin: auto;
                margin-top: auto;
                max-width: 900px;
                border-radius: 10px;
                border-top-width: 60px;
                border-bottom-width: 10px;
                padding: 10px;
            }
            .grid {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                column-gap: 15px;
                row-gap: 5px;
            }
            h4 {
                text-align: center;
            }
            .submit {
                text-align: center;
            }
    </style>
</head>

        <!--<header>
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">

                    <div class="container-fluid">

                        <a class="navbar-brand" href="#">
                            <div><img src="image/logo/logo.png" style="width:60px;"></div>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarToggle">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">หน้าเเรก</a>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('goats.create') }}" class="nav-link">สร้างทะเบียนเเพะ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('goats.index') }}" class="nav-link">ทะเบียนเเพะ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" aria-current="page">
                                        <i data-feather="bell"></i>
                                        <span class="ml-2"></span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown" href="#" id="navbarDropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <span data-feather="user"></span></a>

                                    <ul class="dropdown-menu dropdown-menu-end" aria-labeledby="navbarDropdown">
                                        <li><a href="#" class="dropdown-item">ตั้งค่าโปรไฟล์</a></li>
                                        <li><a href="#" class="dropdown-item">ตั้งค่าการเเจ้งเตือน</a></li>
                                        <li><a href="#" class="dropdown-item">ออกจากระบบ</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>-->

    <body>
            <main>

        <div class="container">


            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('goats.update', $goat->goatId) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row ">
                    <div class="col-md-auto"></div>
                    <div class="col-md-auto">
                        <h4>Goat</h4>

                        <h5>พ่อพันธุ์เเม่พันธุ์เเพะ</h5>
                        <div class="grid">
                            <div class="mb-2">
                                <label for="fatherId">รหัสพ่อพันธุ์เเพะ :</label>
                            <input type="text" name="fatherId" value="{{ $goat->fatherId }}" class="form-control"
                                placeholder="Father Goat ID">
                            @error('fatherId')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group mb-2">
                        <label for="fatherGoatName">ชื่อพ่อพันธุ์เเพะ :</label>
                            <input type="text" name="fatherGoatName" value="{{ $goat->fatherGoatName }}"
                                class="form-control" placeholder="Father Goat Name">
                            @error('fatherGoatName')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group mb-2">
                        <label for="fatherGene">พันธุ์ :</label>
                            <br><select id="fatherGene" name="fatherGene" value="{{ $goat->fatherGene }}">
                                <option value="Anglonubian">พันธุ์แองโกลนูเบียน (Anglonubian)</option>
                                <option value="Boer">พันธุ์บอร์ (Boer)</option>
                                <option value="Saanen">พันธุ์ซาเนน (Saanen)</option>
                                <option value="Laoshan">พันธุ์หลาวซาน (Laoshan)</option>
                                <option value="Alpine">พันธุ์อัลไพน์ (Alpine)</option>
                                <option value="Toggenburg">พันธุ์ทอกเก็นเบอร์ก (Toggenburg)</option>
                            </select>
                            @error('fatherGene')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group mb-2">
                        <label for="motherId">รหัสเเม่พันธุ์เเพะ :</label>
                            <input type="text" name="motherId" value="{{ $goat->motherId }}" class="form-control"
                                placeholder="Mother Goat ID">
                            @error('motherId')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group mb-2">
                        <label for="motherGoatName">ชื่อเเม่พันธุ์เเพะ :</label>
                            <input type="text" name="motherGoatName" value="{{ $goat->motherGoatName }}"
                                class="form-control" placeholder="Mother Goat Name">
                            @error('motherGoatName')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group mb-2">
                        <label for="motherGene">พันธุ์ :</label>
                        <br><select id="motherGene" name="motherGene" value="{{ $goat->motherGene }}">
                                <option value="Anglonubian">พันธุ์แองโกลนูเบียน (Anglonubian)</option>
                                <option value="Boer">พันธุ์บอร์ (Boer)</option>
                                <option value="Saanen">พันธุ์ซาเนน (Saanen)</option>
                                <option value="Laoshan">พันธุ์หลาวซาน (Laoshan)</option>
                                <option value="Alpine">พันธุ์อัลไพน์ (Alpine)</option>
                                <option value="Toggenburg">พันธุ์ทอกเก็นเบอร์ก (Toggenburg)</option>
                            </select>
                            @error('motherGene')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div> </div>
                    <h5>ข้อมูลประจำตัวเเพะ</h5>
                    <div class="grid">
                        <div class="form-group mb-2">
                            <label for="goatId">รหัสประจำตัวเเพะ :</label>
                            <input type="text" name="goatId" value="{{ $goat->goatId }}" class="form-control"
                                placeholder="Goat ID">
                            @error('goatId')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group">
                        <label for="goatName">ชื่อเเพะ :</label>
                            <input type="text" name="goatName" value="{{ $goat->goatName }}" class="form-control"
                                placeholder="Goat Name">
                            @error('goatName')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group mb-2">
                        <label for="sex">เพศ</label>
                        <br>
                            @if ($goat->sex == 'male')
                                <input type="radio" id="male" name="sex" value="male" checked="checked">
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="sex" value="female">
                                <label for="female">Female</label>
                            @else
                                <input type="radio" id="male" name="sex" value="male">
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="sex" value="female" checked="checked">
                                <label for="female">Female</label>
                            @endif
                            @error('sex')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group mb-2">
                        <label for="gene">พันธุ์</label>
                        <br> <select id="gene" name="gene" value="{{ $goat->gene }}">
                                <option value="Anglonubian">พันธุ์แองโกลนูเบียน (Anglonubian)</option>
                                <option value="Boer">พันธุ์บอร์ (Boer)</option>
                                <option value="Saanen">พันธุ์ซาเนน (Saanen)</option>
                                <option value="Laoshan">พันธุ์หลาวซาน (Laoshan)</option>
                                <option value="Alpine">พันธุ์อัลไพน์ (Alpine)</option>
                                <option value="Toggenburg">พันธุ์ทอกเก็นเบอร์ก (Toggenburg)</option>
                            </select>
                            @error('gene')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="colour">สี :</label>
                            <input type="text" name="colour" value="{{ $goat->colour }}" class="form-control"
                                placeholder="Colour">
                            @error('colour')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="dateOfBirth">วัน/เดือน/ปีเกิด (พ.ศ.) :</label>
                            <input type="date" name="dateOfBirth" value="{{ $goat->dateOfBirth }}"
                                class="form-control" placeholder="Date Of Birth">
                            @error('dateOfBirth')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="weightOfBirth">น้ำหนัก (ก.ก.) :</label>
                            <input type="text" name="weightOfBirth" value="{{ $goat->weightOfBirth }}"
                                class="form-control" placeholder="Weight Of Birth">
                            @error('weightOfBirth')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="arrivalDate">วัน/เดือน/ปี ที่มาถึง :</label>
                            <input type="date" name="arrivalDate" value="{{ $goat->arrivalDate }}"
                                class="form-control" placeholder="Arrival Date">
                            @error('arrivalDate')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="image">รูปแพะ :</label>
                            <input type="file" name="image" class="form-control" placeholder="Goat Title">
                            @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <img src="{{ Storage::url($goat->image) }}" height="200" width="200" alt="" />
                        </div>
                    </div>



                    <div class="submit">
                    <button type="submit" class="btn "style="background-color: #80C2B6;">ยืนยันการเเก้ไข</button>
                    <a class="btn "style="background-color: #80C2B6;" href="{{ route('goats.index') }}" enctype="multipart/form-data">
                        ไปยังหน้าทะเบียนเเพะ</a>
                    </div>
                </div>

            </form>
        </div>

    </body>

    </html>@endsection
