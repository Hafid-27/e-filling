<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Form Laporan Bulanan</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Data Laporan Bulanan</h3>
	</div>
	<form class="form-horizontal" method="POST" id="" action="<?php echo base_url('admin_system/laporan_bulanan') ?>">
		<div class="panel-body">
			<!--				-------------------------------------------------------------------------------------------------------->
			<div class="form-group">
				<label class="col-md-1 col-xs-12 control-label">Bulan</label>
				<div class="col-md-2 col-xs-12">
					<select name="bulan" class="form-control">
						<option value="januari" selected>Januari</option>
						<option value="februari" selected>Februari</option>
						<option value="maret" selected>Maret</option>
						<option value="april" selected>April</option>
						<option value="mei" selected>Mei</option>
						<option value="juni" selected>Juni</option>
						<option value="juli" selected>Juli</option>
						<option value="agustus" selected>Agustus</option>
						<option value="september" selected>September</option>
						<option value="oktober" selected>Oktober</option>
						<option value="november" selected>November</option>
						<option value="desember" selected>Desember</option>
					</select>
				</div>
				<label class="col-md-1 control-label">Tahun</label>
				<div class="col-md-2 col-xs-12">
					<select name="tahun" class="form-control">
						<option value="2018" selected>2018</option>
						<option value="2019" selected>2019</option>
						<option value="2020" selected>2020</option>
						<option value="2021" selected>2021</option>
					</select>
				</div>
				<button class="btn btn-primary" type="submit">Lihat</button>
			</div>
		</div>
	</form>
</div>