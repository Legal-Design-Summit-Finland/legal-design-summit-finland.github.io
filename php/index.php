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





<!-- Wrapper // Header Section Begins -->

<div class="wrapper header">
    
    <!-- Container Section Begins -->
    
    <div class="container">
        
        <!-- Header Section Begins -->
        
        <div id="header">
			
            <!-- Content Main Section Begins -->
            
            <div class="content-main">
				
				<?php require_once('regions/header.php'); ?>
				
            </div>
            
            <!-- Content Main Section Ends -->
			
        </div>
        
        <!-- HEADER Section Ends -->
		
    </div>
    
    <!-- Container Section Ends -->
    
    <?php if ($is_home): ?>
    
	<a href="#" class="scroll-down"></a>
	
	<?php endif; ?>
	
</div>

<!-- Wrapper // Header Section Ends -->





<!-- Wrapper // Content Section Begins -->

<div class="wrapper fluid fill content">
    
	<!-- Container Section Begins -->

	<div class="container">

		<!-- Content Section Begins -->

		<div id="content">

			<!-- Content Main Section Begins -->

			<div class="content-main">

				<?php require_once('regions/content.php'); ?>

			</div>

			<!-- Content Main Section Ends -->

		</div>

		<!-- Content Section Ends -->

	</div>

	<!-- Container Section Ends -->
    
</div>

<!-- Wrapper // Content Section Ends -->





<?php if (!$is_home) : ?>

<!-- Wrapper // Content Spacer Section Begins -->

<div class="wrapper spacer"></div>

<!-- Wrapper // Content Spacer Section Ends -->

<?php endif; ?>





<!-- Wrapper // Content Logos Section Begins -->

<div class="wrapper logos">
    
    <!-- Container Section Begins -->
    
    <div class="container">
		
        <!-- Content Section Begins -->
        
        <div id="content-logos">
        	
            <!-- Content Main Section Begins -->
            
            <div class="content-main">
				
				<?php require_once('regions/content-logos.php'); ?>
				
            </div>
            
            <!-- Content Main Section Ends -->
            
        </div>
        
        <!-- Content Section Ends -->
		
    </div>
    
    <!-- Container Section Ends -->
    
</div>

<!-- Wrapper // Content Logos Section Ends -->





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
