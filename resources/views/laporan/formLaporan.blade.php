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
                <form class="form-valide-with-icon" action="/laporan/add_laporan" method="post">
                        @csrf                     
                       <div class="mb-3">
                        <label for="disabledSelect" class="form-alabel">Guru</label>
                        <select id="guru_id" class="form-select" name="guru_id">
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Siswa</label>
                        <select id="siswa_id" class="form-select" name="siswa_id">
                        </select>
                      </div>


                       <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Pelanggaran</label>
                        <select id="disabledSelect" class="form-select" name="pelanggaran_id">
                          @foreach ($pelanggaran as $item)
                          <option value="{{$item->id}}">{{$item->jenispelanggaran}}</option> 
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

@section('scripts')
<script>
    $(document).ready(function() {
        var siswa = "{{ route('cari_siswa') }}";
        $('#siswa_id').select2({
            placeholder: 'pilih siswa',
            ajax: {
                url: siswa,
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.nama,
                            id: item.id,
                        }
                    })
                };
                },
                cache: true
            }
    });
});

$(document).ready(function() {
        var guru = "{{ route('cari_guru') }}";
        $('#guru_id').select2({
            placeholder: 'pilih guru',
            ajax: {
                url: guru,
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.nama,
                            id: item.id,
                        }
                    })
                };
                },
                cache: true
            }
    });
});
</script>
@endsection
@endsection