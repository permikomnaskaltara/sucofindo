		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<?php echo (isset($breadcrumb) ? $breadcrumb : ""); ?>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Vessel <small>Master Vessel Data</small></h1>
			<!-- end page-header -->

            <!-- begin front message -->
            <?php echo (isset($front_message) ? $front_message : ""); ?>
            <!-- end front message -->

			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Data Vessel - Table</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?php echo base_url(); ?>index.php/vessel/add_form/" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Add</a>
                                </div>
                            </div>
                            <div class="clearfix space-height-10"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vessel Name</th>
                                                <th>Vessel Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($vessel->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->vessel_name; ?></td>
                                                <td><?php echo $row->vessel_type; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url(); ?>index.php/vessel/preview_form/<?php echo $row->id; ?>" class="btn-table btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                                                    <a href="<?php echo base_url(); ?>index.php/vessel/edit_form/<?php echo $row->id; ?>" class="btn-table btn btn-primary btn-sm"><i class="fa fa-pencil"></i> </a>
                                                    <a href="<?php echo base_url(); ?>index.php/vessel/confirm_delete/<?php echo $row->id; ?>" class="btn-table btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->