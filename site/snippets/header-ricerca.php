<?php snippet('head-ricerca') ?>

<!-- HEADER -->

<header class="main-nav">
	<nav>
		<a href="<?php echo $site->url() ?>" class="main-logo"></a>
		<span class="menu-button"><a href="" id="toggle"></a></span>
		<ul>
		<?php foreach ($site->page('ricerca')->children()->visible() as $page): ?>

			<?php if ( $page->title() == "progetto" ): ?>
				<li><a href="<?php echo $page->url() ?>" class="<?php e($page->isOpen(), 'active'); ?>"><span class="<?php e($page->isOpen(), 'active'); ?>"><?php echo $page->title() ?></span></a>

					<!-- hide the second level menu if the page isns't part of "progetto" or "abstract" -->
					<div class="conatiner-second-level <?php $parent = page()->parent()->title(); if( $parent!='progetto' && $parent!='abstract' ) { echo "visuallyhidden"; } ?>">

						<ul class="second-level">
							<?php foreach ( $page->children()->visible() as $intpage): ?>
								<li><a href="<?php echo $intpage->url() ?>" class="<?php e($intpage->isOpen(), 'active'); ?>"><span class="<?php e($intpage->isOpen(), 'active'); ?>"><?php echo $intpage->title() ?></span></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</li>
			<?php elseif($page->title() == "risorse"): ?>

				<li><a href="<?php echo page('ricerca/risorse')->url() ?>" class="<?php e($page->isOpen(), 'active');?> resources-li-menu-mobile"><span class="<?php e($page->isOpen(), 'active'); ?>"><?php echo $page->title() ?></span></a></li>

			<?php else: ?>
				

				<li><a href="<?php echo $page->url() ?>" class="<?php e($page->isOpen(), 'active'); ?>"><span class="<?php e($page->isOpen(), 'active'); ?>"><?php echo $page->title() ?></span></a></li>

			<?php endif ?>
      		
      	<?php endforeach ?>
      	</ul>
	</nav>
</header>

<!-- end: HEADER -->