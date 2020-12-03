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
					<div class="card-header">Data Master Barang <a href="{{ route('barang.create') }}" class="btn btn-outline-primary float-right">Create</a></div>
					<div class="card-body">
						<table class="table table-inverse">
							<thead>
								<tr>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Harga Jual</th>
									<th>Harga Beli</th>
									<th>Satuan</th>
									<th>Kategori</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($barang as $barang ) { ?>
							<tr>
								<td><?= $barang->kode_barang ?></td>
								<td><?= $barang->nama_barang ?></td>
								<td><?= $barang->harga_jual ?></td>
								<td><?= $barang->harga_beli ?></td>
								<td><?= $barang->satuan ?></td>
								<td><?= $barang->kategori ?></td>
							</tr>

							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection