    	<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo base_url()?>index.php/admin/katobat">Data Obat</a></li>
			</ul>
<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Data Kategori Obat</h2>
						<div class="box-icon">
                         <a href="#" class="btn-setting"><i class='halflings-icon plus-sign'></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
                                      <th>No</th>
									  <th>Kategori</th> 
								  </tr>
							  </thead>
							  <tbody>
                              <?php
$nomor=$page+1;
if(count($query->result())>0){
foreach($query->result() as $t)
{
		if(($nomor%2)==0){
			$warna="#C8E862";
		} else{
			$warna="#D6F3FF";
		}
echo "<tr>
<td class='center'>".$nomor."</td>
<td class='center'><a href='".base_url()."index.php/pimpinan/detail/".$t->id_kategori."' title='Detail'>".$t->kategori."</a></td>
</td></tr>";
$nomor++;
}
}
else{
echo "<tr><td colspan='5'>Belum ada agenda</td></tr>";
}
?>
							  </tbody>
						 </table>
                        <div class="pagination pagination-centered">
                		<ul>
                		<?php
                		echo $paginator;
                		?>
                		</ul>
                	</div>
					</div>
				</div><!--/span-->
			</div><!--/row-->


                 	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

            	<div class="modal hide fade" id="myModal">
                <?php echo form_open_multipart('admin/simpankatobat');?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">X</button>
			<h3>Add Data Kategori Obat</h3>
		</div>
		<div class="modal-body">
							  <label class="control-label" for="typeahead">Nama Kategori Obat</label>
							  <div class="controls">
							   <input type="text" class="span6 typeahead" id="kategori" name="kategori" placeholder="Masukan Nama Kategori Obat">
							  </div>
		</div>
		<div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save Data</button>
		<button type="reset" class="btn">Cancel</button>
		</div>
	</div>