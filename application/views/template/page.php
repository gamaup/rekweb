<html>
<head>
	<title>Cook-Off</title>
	<?php $this->load->view('template/link') ?>
</head>

<body>

<div id="wrapper">

	<?php $this->load->view('template/navigasi') ?>

	

	<div id="container">
		<?php
			$this->load->view($content);
		?>
	</div>


</div> <!-- end wrapper -->

</body>
</html>