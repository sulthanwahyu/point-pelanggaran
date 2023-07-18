@extends('layout.appdash')
@section('content')

<div class="content-body">
  <div class="container-fluid">
      <div class="row page-titles mx-0">
          <div class="col-sm-6 p-md-0">
              <div class="welcome-text">
                  <h4>Hi, Welcome To Table Kelas</h4>
                  <span class="ml-1">Table Kelas</span>
              </div>
          </div>

          </div>
      </div>
      <!-- row -->


      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Data Kelas</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      {{-- <button type="button"  class="btn btn-primary"><a href="/kelas/add/kelas"class="text-light">ADD +</a></button> --}}
                        <table id="example2" class="display" style="width:100%">
                              <thead>
                                  <tr>
                                    <th>No</th>
                                      <th>Name</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($kelas as $item)
                                <tr>
                                  <td>{{$loop ->iteration}}</td>
                                  <td>{{$item ->nama}}</td>
                                  <td style="display: flex; gap: 5px">
                                    {{-- <a href="/kelas/{{ $item->id }}/editkelas"><i class="fa-solid fa-pen"></i></a> --}}
                                    <a href="/kelas/detailkelas/{{ $item->id }}"><i class="fa-solid fa-circle-info"></i></a>
                                    <form action="/kelas/hapuskelas/{{ $item->id }}" method="POST" onsubmit="return confirm('yakin hapus?')">
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