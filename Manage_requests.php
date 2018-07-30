
<!DOCTYPE html5>
<html class="fixed">
	<head>
		<?php $this->load->view('templates/head'); ?>
		<script type="js">
			function confirmDelete() {
				return confirm("Are u sure u want to delete.");

		}
		</script>
	</head>
	<body>

		<section class="body">
		<?php $this->load->view('templates/header'); ?>
			<div class="inner-wrapper">
				<?php $this->load->view('templates/sidebar_left'); ?>




				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Manage Product</h2>
					</header>

		<!-- Main Content Area Starts  -->

<table id="myDataTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>User Name</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>		



<!-- Main Content Area Ends  -->






				</section>


			</div>
		</section>


		<?php $this->load->view('templates/footer'); ?>
		


		<?php $this->load->view('templates/foot'); ?>

				<!-- Data Tables -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatables-latest/dataTables.min.js"></script>
		<!--<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->		
		<script>
			var executedOnce=false;
			$(document).ready(function() {
			    $('#myDataTable').DataTable( {
			        "processing": true,
			        "serverSide": true,
			        "ajax": {
							    "url": "<?php echo base_url(); ?>requests/manage_data",
							    "type": "POST",
							    "data": function ( d ) {
							    							if(executedOnce) return; //We execute the Add New button adding only once.
							    							//$('.dataTables_length').append("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url(); ?>product/add' class='btn btn-primary'>  Add New</a>")
							    							executedOnce = true;

													    }
							  },
			        "bSort": true, //Sort avaialble
			        "aoColumns": [ //Select which columns to sort
										  null,
										  null,
										  null, 
										  
										  { "bSortable": false },
						  

										],
					"order": [[ 0, "desc" ]],   //Default Order
					"sDom": 'f<"dataTables_length">rtip'//Dom positioning in datatables							
			    } );
			} );
		</script>
	</body>	
</html>



