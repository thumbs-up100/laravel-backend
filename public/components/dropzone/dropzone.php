<?php
	$ds = DIRECTORY_SEPARATOR;

	if ( !empty( $_FILES ) ) {
		$tempFile = $_FILES['file']['tmp_name'];
		$targetPath = dirname( __FILE__ ) . $ds;
		$targetFile =  $targetPath . $_FILES['file']['name'];

		if ( move_uploaded_file( $tempFile, $targetFile ) ) {
			$out = "Success";
		} else {
			$out = "PHP Error";
		}

		echo $out;
	}
?>
