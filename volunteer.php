<?php require_once('config.php'); ?>
<!doctype html>

<html>
<head>

<?php require_once('regions/meta.php'); ?>

<?php require_once('regions/styles.php'); ?>

<?php require_once('regions/scripts.php'); ?>

<title><?php print ((!$is_home) ? $page_title . ' - ' : '') . $site_name; ?></title>

</head>

<body class="<?php print $page_classes; ?>">

<?php if ( $site_active == true ) : ?>

<!-- Wrapper // Menu Section Begins -->

<div class="wrapper menu fluid">
    
    <!-- Container Section Begins -->
    
    <div class="container">
        
        <!-- Menu Section Begins -->
        
        <div id="menu">
			
            <!-- Content Main Section Begins -->
            
            <div class="content-main">

				<?php require_once('regions/menu.php'); ?>

            </div>
            
            <!-- Content Main Section Ends -->
			
        </div>
        
        <!-- Menu Section Ends -->
		
    </div>
    
    <!-- Container Section Ends -->
	
</div>

<!-- Wrapper // Menu Section Ends -->




<?php if (!$is_home) : ?>

<!-- Wrapper // Content Spacer Section Begins -->

<div class="wrapper spacer"></div>

<!-- Wrapper // Content Spacer Section Ends -->

<?php endif; ?>




<div class="wrapper">
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdzmfhXP80OTinW54K8e47e7xSdFbj5CNJrEG4ygGvRXc-L8A/viewform?embedded=true" width="100%" height="6500" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
</div>

<!-- Wrapper // Content Actions Section Begins -->

<div class="wrapper actions">
    
    <!-- Container Section Begins -->
    
    <div class="container">
		
        <!-- Content Section Begins -->
        
        <div id="content-actions">
        	
            <!-- Content Main Section Begins -->
            
            <div class="content-main">
				
				<?php require_once('regions/content-actions.php'); ?>
				
            </div>
            
            <!-- Content Main Section Ends -->
            
        </div>
        
        <!-- Content Section Ends -->
		
    </div>
    
    <!-- Container Section Ends -->
    
</div>

<!-- Wrapper // Content Actions Section Ends -->





<!-- Wrapper // Footer Section Begins -->

<div class="wrapper footer">
    
    <!-- Container Section Begins -->
    
    <div class="container">
		
		<!-- Footer Section Begins -->
		
        <div id="footer">
            
            <!-- Content Main Section Begins -->
            
            <div class="content-main">
                
                <?php require_once('regions/footer.php'); ?>
                
            </div>
            
            <!-- Content Main Section Ends -->
			
        </div>
		
        <!-- Footer Section Ends -->
        
    </div>
    
    <!-- Container Section Ends -->
    
	<a href="#" class="scroll-up"></a>
	
</div>

<!-- Wrapper // Footer Section Ends -->

<?php else : ?>

<?php require_once($page_path . 'maintenance.php'); ?>

<?php endif; ?>

</body>

</html>
