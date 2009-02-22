<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="<?php print $language ?>" xml:lang="<?php print $language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
</head>

<body><center>
<div id="gradientwrap">
	<div id="sitewrap">
		<div id="middlewrap">
			<div id="page">
				<div id="header">

					<div id="logo">
					<?php if ($site_name){ ?>
					<h1><a href="<?php print url() ?>" title="<?php print t('Home') ?>" rel="home"><?php print $site_name ?></a></h1>
					<?php } ?>
						<div class="description">rapid development :: ad-hoc collaboration :: cross pollination</div>
					
						
						<?php if ($primary_links){ ?>
							<?php print theme('links', $primary_links, array('class' => 'links mainmenu')) ?>
						<?php } ?>
						<?php if (count($secondary_links)){ ?>
							<?php print theme('links', $secondary_links, array('class' => 'links secondary_menu')) ?>
						<?php } ?>
						
					</div>
				</div><!-- close header -->	
		<div class="clear"></div>
					
				<div id="contentwrap">
					<div id="primary">

					<?php if ($breadcrumb){ ?>
						<div id="breadcrumb"><?php print $breadcrumb ?></div>
					<?php } ?>
					<?php if ($messages != ""){ ?>
						<div id="message"><?php print $messages ?></div>
					<?php } ?>
					<?php if ($mission != ""){ ?>
						<div id="mission"><span><?php print $mission ?></span></div>
					<?php } ?>
					<?php if ($title != ""){ ?>
						<h2 id="title"><?php print $title ?></h2>
					<?php } ?>
					<?php if ($help != ""){ ?>
						<p id="help"><?php print $help ?></p>
					<?php } ?>
					<?php if ($tabs != ""){ ?>
						<?php print $tabs ?>
					<?php } ?>
						<div class="content">
						<?php print $before_content ?>
						<?php print $content ?>
						</div>
					
					</div> <!-- close primary -->


					<?php if ($sidebar_right != ''){ ?>
					<div id="sidebar-right"  class="secondary">
						<?php if($search_box) { ?>
							<?php print $search_box ?>
						<?php } ?>
					  
						<?php print $sidebar_right; ?>
					</div>
					<?php } ?>
					
				
				
				</div><!-- close content -->
		<div class="clear"></div>
			</div><!-- Close Page -->
		<div class="clear"></div>
		</div><!-- Close middlewrap -->
	<div id="footer"><div id="bgroot">
	<?php if ($footer_message){ ?>
  		<?php print $footer_message;?>
	<?php } ?>
  	<p class="credits">Powered by <a href="http://www.drupal.org">Drupal</a>.</p>
	</div></div>
	</div><!-- Close sitewrap -->
</div>	<!-- Close gradientwrap -->	

<?php print $closure;?>
</center>
</body>
</html>
