{{-- @extends('layout.appdash')
@section('title', 'detail')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <style>
      .infosis{
          display: flex;
          margin-bottom: 7vh;
      }
      .left{
          border-left: 2px solid black;
          padding-left: 20px;
          padding-top: 20px;
      }
      .infoIcon{
          margin-top: 10vh;
          margin-left: 0vw;
      }
      .btn-back{
          margin-left: 65vw;
      }
      .infodeta{
          gap: 10px;
          margin-left: 15px;
          padding-top: 80px;
          display: flex;
      }
      #point{
          background-color: rgb(124, 131, 136);
          border-radius: 3px;
          justify-content: center;
          align-items: center;
          padding: 7px 7px 0px 7px;
      }
      #point h2{
          color: rgb(245, 245, 245);
      }
      h6{
         margin-bottom: 40px
      }
      .right{
         padding-top: 20px;
   
      }
   </style>
</head>
<body onload="warnawarni()">
   <div class="content-body">
      <div class="container-fluid">
          <div class="row page-titles mx-0">
              <div class="col-sm-6 p-md-0">
                  <div class="welcome-text">
                      <h4>Hi, welcome To Detail</h4>
                      <p class="mb-1">Detail Data</p>
                  </div>
              </div>
              <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                  </ol>
              </div>
          </div>
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h2>Detail dari siswa : {{$siswa->nama}}</h2>
                              <div id="point">
                              <h2 > 
                                  POINT : <span id="nilai">{{$siswa->point}}</span>
                              </h2>
                          </div>
                          </div>
                          <div class="card-body">
                              
                              <div class="infosis">
                                  <div class="infoIcon">
                                  <img src="{{asset('images\WhatsApp Image 2022-12-11 at 13.17.43.jpeg')}}" alt="" width="300px">
                                  </div>
                                  <div class="infodeta">
                                  <div class="left">
                                  <h6>Nama : {{$siswa->nama}}</h6>
                                  <h6>NISN : {{$siswa->nisn}}</h6>
                                  <h6>Email : {{$siswa->email}}</h6>
                                  <h6>No Ponsel :{{$siswa->nohp}}</h6>
                                  <h6>Alamat :{{$siswa->alamat}}</h6>
                              </div>
                              <div class="right">
                                  <h6>Jenis Kelamin : {{$siswa->jeniskelamin}}</h6>
                                  <h6>Kelas : {{$siswa->kelas['nama']}}</h6>
                                  <h6>Jurusan : {{$siswa->jurusan['nama']}}</h6>
                              </div>
                          </div>
                              </div>
                              <div class="btn-back">
                                  <a href="/"><Button type="button" class="btn btn-primary">Kembali</Button></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>

   <script>
     var point = document.getElementById("point");
   var nilai = document.getElementById("nilai").innerText;
   var hasil = parseInt(nilai)
   // var E = '100';
   // var D = '75';
   // var C = '50';
   // var A = '10';
   function warnawarni(){
       if(hasil >= 75 && hasil <= 100){
           document.getElementById("point").style.backgroundColor ="green";
       }else if(hasil >= 2 && hasil <= 75)  {
           document.getElementById("point").style.backgroundColor ="orange";
       }else if (hasil >= 2 && hasil <= 0) {
           document.getElementById("point").style.backgroundColor ="red";
       }else{
           document.getElementById("point").style.backgroundColor ="red";
       }

   }
   </script>
</body>
</html>






@endsection --}}