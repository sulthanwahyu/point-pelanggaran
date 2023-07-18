@extends('layout.appdash')
@section('content')

<div class="content-body">
  <div class="container-fluid">
      <div class="row page-titles mx-0">
          <div class="col-sm-6 p-md-0">
              <div class="welcome-text">
                  <h4>Hi, Welcome To Table Guru</h4>
                  <span class="ml-1">Table Guru</span>
              </div>
          </div>

          </div>
      </div>
      <!-- row -->


      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Data Guru</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <button type="button"  class="btn btn-primary"><a href="/guru/add_guru" class="text-light">ADD +</a></button>
                        <table id="example2" class="display" style="width:100%">
                              <thead>
                                  <tr>
                                    <th>No</th>
                                      <th>Name</th>
                                      <th>NIPD</th>
                                      <th>ALAMAT</th>                                                                 
                                      <th>Kelas</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($guru as $item)
                                <tr>
                                  <td>{{$loop ->iteration}}</td>
                                  <td>{{$item ->nama}}</td>
                                  <td>{{$item ->nipd}}</td>
                                  <td>{{$item ->alamat}}</td>                                
                                  <td>{{$item ->kelas->nama}}</td>
                                  <td style="display: flex; gap: 5px">
                                    <a href="/guru/edit/{{$item->id}}"><i class="fa-solid fa-pen"></i></a>
                                    <a href="/guru/detail/{{$item->id}}"><i class="fa-solid fa-circle-info"></i></a>
                                    <form action="/guru/destroy/{{$item->id}}" method="POST" onsubmit="return confirm('yakin hapus?')">
                                      @csrf
                                      @method('DELETE')
                                      <button style="border:none" type="submit"><i class="fa-solid fa-trash"></i></button>
                                     </form>
                                  </td>
                                 </tr>
                                @endforeach
                                 
                              </tbody>
                              {{-- <tfoot>
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>NIPD</th>
                                    <th>ALAMAT</th>                                                                 
                                    <th>Kelas</th>
                                    <th>Action</th>
                                  </tr>
                              </tfoot> --}}
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection