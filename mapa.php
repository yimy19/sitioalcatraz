<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        	<div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d404.7982482744888!2d-75.00515951258669!3d6.179524148363994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1efa8c068acfd59!2sHosteria%20Alcatraz!5e1!3m2!1ses!2sco!4v1596403770019!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
		            <h2>UBICACION</h2>
		       		<p>Estamos ubicado a 2 km de la cabecera municipal via-san carlos Para tu completa comodidad en la hostería alcatraz contamos con diversos espacios para que compartas en familia o con tu pareja, te ofrecemos distintos servicios, tendrás una experiencia inolvidable.</p>
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>