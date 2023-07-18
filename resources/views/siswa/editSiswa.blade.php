@extends('layout.appdash')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-1">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div>
        </div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vertical Forms with icon</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form class="form-valide-with-icon" action="/siswa/up/{{$siswa->id}}" method="post">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label class="form-label">Name</label>
                        <input name="nama" value="{{$siswa->nama}}" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label  class="form-label">Nisn</label>
                        <input name="nisn" value="{{$siswa->nisn}}" type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                        <select id="disabledSelect" value="{{$siswa->jeniskelamin}}" name="jeniskelamin" class="form-select">
                            <option>Pria</option> 
                            <option>Wanita</option> 
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <input name="alamat" value="{{$siswa->alamat}}" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label  class="form-label">No Ponsel</label>
                        <input name="nohp" value="{{$siswa->nohp}}" type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label  class="form-label">Email</label>
                        <input name="email" value="{{$siswa->email}}" type="email" class="form-control" >
                      </div>
                     
                       <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Kelas</label>
                        <select id="disabledSelect" class="form-select" name="kelas_id">
                          <option selected value="{{$siswa->kelas}}">{{$siswa->kelas['nama']}}</option>
                          @foreach ($kelas as $item)
                          <option value="{{$item->id}}">{{$item->nama}}</option> 
                          @endforeach
                        </select>
                      </div>
                       <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Jurusan</label>
                        <select id="disabledSelect" class="form-select" name="jurusan_id">
                          <option selected value="{{$siswa->jurusan}}">{{$siswa->jurusan['nama']}}</option>
                          @foreach ($jurusan as $item)
                          <option value="{{$item->id}}">{{$item->nama}}</option> 
                          @endforeach
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection