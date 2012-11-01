<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>SWFUpload Demos - Simple Demo</title>
<link href="swfupload/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfupload/swfupload.js"></script>
<script type="text/javascript" src="swfupload/swfupload.queue.js"></script>
<script type="text/javascript" src="swfupload/fileprogress.js"></script>
<script type="text/javascript" src="swfupload/handlers.js"></script>
<script type="text/javascript">
		var swfu;

		window.onload = function() {
			var settings = {
				flash_url : "swfupload/swfupload.swf",
				upload_url: "upload.php",
				post_params: {"<?php echo session_name(); ?>" : "<?php echo session_id(); ?>"},
				file_size_limit : "100 MB",
				file_types : "*.jpg;*.jpeg;*.gif;",
				file_types_description : "Image Files",
				file_upload_limit : 0,
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress"
				},
				debug: false,

				// Button settings
				button_image_url: "swfupload/XPButtonUploadText_61x22.png",
				button_width: 61,
				button_height: 22,
				button_placeholder_id: "spanButtonPlaceHolder",
				button_text_style: ".theFont { font-size: 16; }",
				button_text_left_padding: 12,
				button_text_top_padding: 3,
				
				// The event handler functions are defined in handlers.js
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete	// Queue plugin event
			};

			swfu = new SWFUpload(settings);
	     };
	</script>
</head>
<body>


		<div id="fsUploadProgress"></div>
		<span id="spanButtonPlaceHolder"></span>


</body>
</html>
