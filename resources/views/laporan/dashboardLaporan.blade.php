@extends('layout.appdash')
@section('content')

<div class="content-body">
  <div class="container-fluid">
      <div class="row page-titles mx-0">
          <div class="col-sm-6 p-md-0">
              <div class="welcome-text">
                  <h4>Hi, Welcome To Table Laporan</h4>
                  <span class="ml-1">table siswa</span>
              </div>
          </div>
      </div>
      <!-- row -->


      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Data Table</h4>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                        <button type="button"  class="btn btn-primary"><a href="/laporan/add_laporan" class="text-light">ADD +</a></button>
                          <table id="example2" class="display" style="width:100%">
                              <thead>
                                  <tr>
                                    <th>guru</th>
                                    <th>SIswa</th>
                                      <th>laporan</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($laporan as $item)
                                
                          
                                <tr>
                                  <td>{{$item ->guru ->nama}}</td>
                                  @foreach ($item ->siswa as $siswa)
                                  <td>{{$siswa ->nama}}</td>
                                  @endforeach
                                  <td>{{$item ->pelanggaran->jenispelanggaran}}</td>
                                  <td>
                                    <form action="/laporan/destroy/{{$item->id}}" method="POST" onsubmit="return confirm('yakin hapus?')">
                                      @csrf
                                      @method('DELETE')
                                      <button style="border:none;margin-left:20%" type="submit"><i class="fa-solid fa-trash"></i></button>
                                     </form>
                                  </td>
                                 </tr>
                                @endforeach
                                 
                              </tbody>
                              {{-- <tfoot>
                                  <tr>
                                      <th>guru</th>
                                      <th>siswa</th>
                                      <th>laporan</th>
                                      <th>action</th>
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