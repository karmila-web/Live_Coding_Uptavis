@extends('layouts.main')

@section('title')
Menu Transaksi
@endsection

@section('myCss')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tampilan Klasemen</h1>
				</div>
				<!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active">
                        Tampilan Klasemen
						</li>
					</ol>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<!-- /.card-header -->
						<div class="card-body">
							@if ($message = Session::get('sukses'))
								<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>{{ $message }}</strong>
								</div>
							@elseif($message = Session::get('error_email'))
								<div class="alert alert-danger alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>{{ $message }}</strong>
								</div>
							@elseif($message = Session::get('error'))
								<div class="alert alert-danger alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>{{ $message }}</strong>
								</div>
							@endif
							<table id="tampilan_klasemen" class="table table-bordered table-striped">
							<thead>
							<tr align="center">
								<th>No.</th>
								<th>Club</th>
								<th>Ma</th>
								<th>Me</th>
								<th>S</th>
								<th>K</th>
								<th>GM</th>
								<th>GK</th>
								<th>Point</th>
							</tr>
							</thead>
							<tbody>
                            <?php $no = 1 ?>
                            @foreach($club as $data)
							<tr align="center">
								<td><?= $no++ ?></td>
								<td>{{ $data->nama_klub }} {{ $data->kota_klub }}</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
                            @endforeach
							</tfoot>
							</table>

						</div>
					<!-- /.card-body -->
					</div>					

				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<form action="" method="POST" style="display:none">
		@method('DELETE')
		@csrf
		<button class="btn btn-danger btn-sm" id='btn-hapus' type="submit">
		<i class="fa-icon fas fa-trash"></i></button>
    </form>
	<!-- /.content -->
</div>
@endsection

@section('myLib')
	<!-- DataTables  & Plugins -->
	<script src="{{ asset('template/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/jszip/jszip.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('template/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection

@section('myJs')
    <script>
        $('a#tampilan_klasemen').addClass('active');

        $("table#tampilan_klasemen").DataTable({
	      "responsive": true, "lengthChange": true, "autoWidth": false,
		  "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Semua"]],
	    }).buttons().container().appendTo('#tampilan_klasemen_wrapper .col-md-6:eq(0)');

		function confirm_del(nama, route) {
			if(!confirm('Anda yakin akan menghapus data '+ nama + ' ?')) return false;
             $("form").attr("action", route);
             $("button#btn-hapus").trigger("click");
		}

    </script>
@endsection