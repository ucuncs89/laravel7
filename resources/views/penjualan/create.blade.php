@extends('layout')
@section('content')
<br>
<br>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Input Data Penjualan </div>
					<div class="card-body">
						<form method="post" action="{{ route('penjualan.store') }}">
							@csrf
							<div class="form-group">
								<label>Tgl Faktur</label>
								<input type="date" name="tgl_faktur" class="form-control" required>
							</div>
							<div class="form-group">
								<label>No Faktur</label>
								<input type="text" name="no_faktur" class="form-control" required placeholder="No Faktur">
							</div>
							<div class="form-group">
								<label>Nama Konsumen</label>
								<input type="text" name="nama_konsumen" class="form-control" required placeholder="Nama">
							</div>
							<div class="form-group">
								<label>Barang</label>
								<select name="barang_id" class="form-control">
									@foreach ($barang as $barang)
									<option value="{{ $barang->id }}">{{$barang->kode_barang}} - {{$barang->nama_barang}} - IDR . {{$barang->harga_jual}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Jumlah Beli</label>
								<input type="number" name="jumlah" class="form-control" required>
							</div>
							<div class="form-group">
								<button class="btn btn-primary float-right" type="submit" name="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection