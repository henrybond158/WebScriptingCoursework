<html>
	<head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script src="js/jquery.motionCaptcha.0.2.js"></script>
        <link href="css/jquery.motionCaptcha.0.2.css"></script>
	</head>

	<body>


        <form action="#" id="mycoolform" method="post">
	 		<div id="mc">
	            <p>Please draw the shape in the box to submit the form:</p>
	            <canvas id="mc-canvas"></canvas>
	        </div>

	          <input type="submit" disabled="disabled" value="Submit Form" />

	          <input type="hidden" id="fairly-unique-id" value="submitform.php" />

        </form>
        
  <script type="text/javascript">

      $('#form-id').motioncaptcha({
            action: '#fairly-unique-id'
        });
        $('#form-id').motioncaptcha({
            // Basics:
            action: '#mc-action',        // the ID of the input containing the form action
            divId: '#mc',                // if you use an ID other than '#mc' for the placeholder, pass it in here
            cssClass: '.mc-active',      // this CSS class is applied to the 'mc' div when the plugin is active
            canvasId: '#mc-canvas',      // the ID of the MotionCAPTCHA canvas element
            
            // An array of shape names that you want MotionCAPTCHA to use:
            shapes: ['triangle', 'x', 'rectangle', 'circle', 'check', 'caret', 'zigzag', 'arrow', 'leftbracket', 'rightbracket', 'v', 'delete', 'star', 'pigtail'],
            
            // These messages are displayed inside the canvas after a user finishes drawing:
            errorMsg: 'Please try again.',
            successMsg: 'Captcha passed!',
            
            // This message is displayed if the user's browser doesn't support canvas:
            noCanvasMsg: "Your browser doesn't support <canvas> - try Chrome, FF4, Safari or IE9."
            
            // This could be any HTML string (eg. '<label>Draw this shit yo:</label>'):
            label: '<p>Please draw the shape in the box to submit the form:</p>'
        });

      
    
  </script>
</body>

</html>