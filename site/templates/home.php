<?php snippet('header') ?>

<main class="home">
	<h1 class="title home-main-title desktop"><?php echo $site->subtitle()->html() ?></h1>
	<h1 class="title home-main-title mobile"><?php echo $site->second_title()->html() ?></h1>

	<div id="top-part">
		<!-- TOOLKIT -->

		<section id="toolkit">
			<h2><?php echo l::get('toolkit'); ?></h2>
			<div>
				<p><?php echo page()->toolkit()->kt() ?></p>
			</div>
		</section>

		<!-- end: TOOLKIT -->


		<!-- RESOURCES -->

		<section id="resources">

			<h2><?php echo l::get('resources'); ?></h2>
			<ul>
				<?php foreach (page()->resources()->toStructure() as $resource): ?>

				<?php if($resource->url()->isNotEmpty() or $resource->doc()->isNotEmpty()): ?>

					<?php if($resource->url()->isNotEmpty()): ?>

					<a href="<?php echo $resource->url()->toURL() ?>" target="_blank"><li class="button"><?php echo $resource->name() ?></li></a>

					<?php else: ?>

					<a href="<?php echo page()->document($resource->doc())->url() ?>" target="_blank"><li class="button"><?php echo $resource->name() ?></li></a>

					<?php endif ?>

				<?php endif ?>

				<?php endforeach ?>
				
			</ul>

		</section>

		<!-- end: RESOURCES -->
	</div>


	<!-- PROJECT -->

	<section id="project">
		<div>
			<h2><?php echo l::get('project'); ?></h2>
			<div><?php echo page()->project()->kt() ?></div>
		</div>
	</section>

	<!-- end: PROJECT -->

	<?php snippet('enti-promotori') ?>
	<?php snippet('enti-sostenitori') ?>

</main>
	
<?php snippet('footer-ricerca') ?>