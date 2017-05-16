<?php snippet('head') ?>

<!-- HEADER -->

<header class="main-nav">
	<nav>
		<a href="<?php echo $site->url() ?>" class="main-logo"></a>
		<ul>
			<li><a href="<?php echo page('kit')->url() ?>"><?php echo page('kit')->title() ?></a></li>
			<li><a href="<?php echo page('percorsi')->url() ?>"><?php echo page('percorsi')->title() ?></a></li>
		</ul>
	</nav>
</header>

<!-- end: HEADER -->