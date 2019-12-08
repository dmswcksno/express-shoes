        <!-- Begin Page Content -->
        <div class="container-fluid">

		<?php echo $this->session->flashdata('message'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-1">
			<div>
				<div class="float-left">
				<h6 class="font-weight-bold text-primary my-3"><?php echo $title; ?></h6>
				</div>

				<div class="float-right">
				<a class="btn btn-sm btn-primary mt-2" href="<?php echo base_url('administrator/datatoko/getallstore')  ?>"><i class="fas fa-plus-circle mr-1"></i>View All</a>
				</div>

				<div class="float-right">
				<a class="btn btn-sm btn-primary mt-2 mr-2" href="<?php echo base_url('administrator/datatoko/insert')  ?>"><i class="fas fa-plus-circle mr-1"></i>Add Data</a>
				</div>
			</div>
			</div>
			
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<thead>
                    <tr>
						<th>No</th>
						<th>Store Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Options</th>
					</tr>
					</thead>
					
                	<tfoot>
                  	<tr>
					  	<th>No</th>
						<th>Store Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Options</th>
                    </tr>
					</tfoot>		
                	<tbody>
						<?php foreach($data as $num => $val) : ?>
							<tr>
								<td><?php echo ++$num; ?></td>
								<td><?php echo $val->nama_toko ?></td>
								<td><?php echo $val->email ?></td>
								<td><?php echo $val->no_telp ?></td>
								<td><?php echo $val->latitude ?></td>
								<td><?php echo $val->longitude ?></td>
								<td>
								<a class="btn-sm btn-primary" href="#"><i class="fas fa-search"></i></a>
								<a class="btn-sm btn-warning" href="<?php echo site_url("administrator/datatoko/update/" .$val->id_toko) ?>"><i class="fas fa-edit"></i></a>
								<a class="btn-sm btn-danger" href="<?php echo site_url("administrator/datatoko/delete/" .$val->id_toko) ?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?> 
                	</tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->