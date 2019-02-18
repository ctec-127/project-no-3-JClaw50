<?php // Filename: create-record.php
$pageTitle = "Create Record";
// Required header that's put on the top of each displayable page's code
require 'inc/layout/header.inc.php'; 
?>
<!--The bootstrap followed by the insertion of required modules form and content-->
<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12">
			<h1>Create a New Record</h1>
			<?php require __DIR__ .'/inc/create/content.inc.php'; ?>
			<?php require __DIR__ .'/inc/create/form.inc.php' ?>
		</div>
    </div>
</div>
<!--Required footer that's put on the bottom of each displayable page's code-->
<?php require 'inc/layout/footer.inc.php'; ?>