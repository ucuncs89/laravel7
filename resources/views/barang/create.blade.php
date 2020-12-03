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
					<div class="card-header">Input Data Barang </div>
					<div class="card-body">
						<form method="post" action="{{ route('barang.store') }}">
							@csrf
							<div class="form-group">
								<label>Kode Barang</label>
								<input type="text" name="kode_barang" class="form-control" required placeholder="Kode Barang">
							</div>
							<div class="form-group">
								<label>Nama Barang</label>
								<input type="text" name="nama_barang" class="form-control" required placeholder="Nama Barang">
							</div>
							<div class="form-group">
								<label>Harga Jual</label>
								<input type="number" name="harga_jual" class="form-control" required placeholder="Harga Jual">
							</div>
							<div class="form-group">
								<label>Harga Beli</label>
								<input type="number" name="harga_beli" class="form-control" required placeholder="Harga Beli">
							</div>
							<div class="form-group">
								<label>Satuan</label>
								<select name="satuan" class="form-control" required>
									<option value="PAX">PAX</option>
									<option value="UNIT">UNIT</option>
								</select>
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select name="kategori" class="form-control" required>
									<option value="Pencil">Pencil</option>
									<option value="Buku">Buku</option>
									<option value="Solasi">Solasi</option>
								</select>
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