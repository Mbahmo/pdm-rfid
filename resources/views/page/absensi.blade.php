@extends('adminlte::page')

@section('content')
@include('layouts._modal')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Data Absensi
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Kode MK</th>
                    <th>Kelas</th>
                    <th>NIDN</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>checkin</th>
                    <th>checkout</th>
                    <th>ID Jadwal</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Kode MK</th>
                    <th>Kelas</th>
                    <th>NIDN</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Checkin</th>
                    <th>Checkout</th>
                    <th>ID Jadwal</th>
                    <th>Action</th>
                  </tr>
              </tfoot>
          </table>
    </div>
</div>
@endsection

@push('js')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.Absensi') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'kodemk', name: 'kodemk'},
                {data: 'kelas', name: 'kelas'},
                {data: 'nidn', name: 'nidn'},
                {data: 'hari', name: 'hari'},
                {data: 'tanggal', name: 'tanggal'},
                {data: 'checkin', name: 'checkin'},
                {data: 'checkout', name: 'checkout'},
                {data: 'idjadwal', name: 'idjadwal'},
                {data: 'action', name: 'action', orderable:false, searchable:false}
            ]
        });     
    </script>
@endpush
