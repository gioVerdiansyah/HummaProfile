@extends('layouts.nav-admin')

@section('content')
  <title>{{ config('app.name', 'Laravel') }} - Daftar Kelas Industry</title>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card" style="">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h6 class="card-title">List Siswa Magang Terdaftar</h6>
            <div id="dataTableExample_filter" class="dataTables_filter d-flex justify-content-end">
              <form method="GET"><label><input type="search" class="form-control" placeholder="Search" name="query" value="{{ request('query') }}" aria-controls="dataTableExample"></label></form>
            </div>
          </div>
          <div class="table-responsive" style="">
            <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
              <div class="row">
                <div class="col-sm-12">
                  <table id="dataTableExample" class="table dataTable no-footer" aria-describedby="dataTableExample_info">
                    <thead>
                      <tr>
                        <th class="sorting sorting_asc" tabindex="0" style="width: 144.302px;">
                          Nama Pengaju</th>
                        <th class="sorting sorting_asc" tabindex="0" style="width: 144.302px;">
                          Asal Sekolah</th>
                        <th class="sorting sorting_asc" tabindex="0" style="width: 144.302px;">
                          Jurusan</th>
                        <th class="sorting sorting_asc" tabindex="0" style="width: 144.302px;">
                          Jurusan</th>
                        <th class="sorting sorting_asc" tabindex="0" style="width: 144.302px;">
                          Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($siswa as $row)
                        <tr class="odd">
                          <td class="sorting_1">{{ $row->nama }}</td>
                          <td class="sorting_1">{{ $row->asal_sekolah }}</td>
                          <td class="sorting_1">{{ $row->jurusan }}</td>
                          <td class="sorting_1">{{ $row->kelas }}</td>
                          <td>
                            <button type="button" class="btn btn-primary">Detail</button>
                            <button type="button" class="btn btn-danger" onclick="showDeletePopup({{ $row->id }}, '{{ $row->layanan }}')">Hapus</button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="dataTableExample_paginate">
                    {{ $siswa->onEachSide(1)->links('layouts.pagination') }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function showDeletePopup(id, name) {
      Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Apakah anda yakin ingin menghapus layanan " + name,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          fetch(`{{ route('layanan-perusahaan.destroy', '') }}/${id}`, {
              method: 'DELETE',
              headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
              },
            })
            .then(response => response.json())
            .then(data => {
              if (data.response.success) {
                Swal.fire({
                  title: "Terhapus!",
                  text: "Berhasil menghapus layanan.",
                  icon: "success"
                }).then((result) => {
                  if (result.dismiss === Swal.DismissReason.close || result
                    .dismiss === Swal.DismissReason.esc || result.dismiss ===
                    Swal.DismissReason.overlay || result.dismiss === Swal
                    .DismissReason.timer) {
                    location.reload();
                  }
                });
              } else {
                Swal.fire({
                  title: "Error!",
                  text: "Terjadi kesalahan saat menghapus layanan.",
                  icon: "error"
                });
              }
            });
        }
      });
    }
  </script>
@endsection