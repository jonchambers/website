<!DOCTYPE html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>random pixels</title>
		
		<style type="text/css">
	body {
	  margin: 0px;
	padding: 0px;
background-color: #fff;
	}
		canvas { 
		//width: 100%;
	//height: 100%; 	
//position: fixed;
//z-index: 1;  
	}
			</style>
		
		<script src="processing.js" type="text/javascript"></script>
		<script type="text/javascript">
//		function init()
//{
  //  canvas = document.getElementById("randompixels");
    //canvas.width = document.body.clientWidth; //document.width is obsolete
    //canvas.height = document.body.clientHeight; //document.height is obsolete
    //canvasW = canvas.width;
    //canvasH = canvas.height;
 
 
//}

function resizeCanvas() {
        var canvas = document.getElementById('randompixels'),
               // context = canvas.getContext('2d');

        // resize the canvas to fill browser window dynamically
        window.addEventListener('resize', resizeCanvas, true);
        
        
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
              
        
        
        
        }
		
		
function getProcessingSketchId () { return 'randompixels'; }
</script>

	</head>
	<body onload="resizeCanvas()">
		
				<canvas id="randompixels" data-processing-sources="PixelArray_RandomColors.pde" 
						>
					<p>Your browser does not support the canvas tag.</p>
					<!-- Note: you can put any alternative content here. -->
				</canvas>
					</body>
</html>
