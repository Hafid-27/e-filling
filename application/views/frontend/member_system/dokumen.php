            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Pengajuan Peminjaman Document</h1>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">List Document</h3>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <!--<th>ID</th>-->
                          <th>Nama Dokumen</th>
                          <th>Nama Perusahaan</th>
                          <th>kode</th>
                          <th>Deskripsi</th>
                          <th>Stock</th>
                          <th>Pinjam</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $d1) { ?>
                          <tr>
                            <!--<td><?php echo $d1->id_dokumen ?></td>-->
                            <td><?php echo $d1->name ?></td>
                            <td><?php echo $d1->nama_pt ?></td>
                            <td><?php echo $d1->kode ?></td>
                            <td><?php echo $d1->desc ?></td>
                            <td><?php echo $d1->stock ?></td>
                            <td class="text-center">
                              <form action="<?php echo base_url('member_system/dokumen_pinjam') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $d1->id_dokumen ?>">
                                <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="delete" data-placement="top" data-toggle="tooltip"><i class="fa fa-book"></i> Pinjam</button>
                              </form>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
            </div>