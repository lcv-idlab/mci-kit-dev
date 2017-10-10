<?php snippet('head') ?>

<!-- HEADER -->

<header class="main-nav">
	<nav>
		<a href="<?php echo $site->url() ?>" class="main-logo"></a>
		<div id="menu-button">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul id="main-menu">
			<li><a href="<?php echo page('kit')->url() ?>"><?php echo page('kit')->title() ?></a></li>
			<li><a href="<?php echo page('percorsi')->url() ?>"><?php echo page('percorsi')->title() ?></a></li>
		</ul>
	</nav>
</header>

<!-- end: HEADER -->