@extends('layout')
@section('content')
<br>
<br>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">Data Penjualan <a href="{{ route('penjualan.create') }}" class="btn btn-outline-primary float-right">Create</a>
					</div>
					<div class="card-body">
							<table class="table table-inverse">
								<thead>
									<tr>
										<th>Tgl Faktur</th>
										<th>No Faktur</th>
										<th>Nama Konsumen</th>
										<th>Kode Barang</th>
										<th>Jumlah</th>
										<th>Harga Satuan</th>
										<th>Harga Total</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($penjualan as $penjualan)
								<tr>
									<td>{{ $penjualan->tgl_faktur }}</td>
									<td>{{ $penjualan->no_faktur }}</td>
									<td>{{ $penjualan->nama_konsumen }}</td>
									<td>{{ $penjualan->barang_id }}</td>
									<td>{{ $penjualan->jumlah }}</td>
									<td>{{ $penjualan->harga_satuan }}</td>
									<td>{{ $penjualan->harga_total }}</td>
									<td><a href="{{ route('penjualan.edit',$penjualan->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> &nbsp; <a href="{{ route('penjualan.delete',$penjualan->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										
									</td>
								</tr>
								@endforeach
								</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection