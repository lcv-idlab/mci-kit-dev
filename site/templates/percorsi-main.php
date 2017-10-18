<?php snippet('header') ?>

<main>
	<div id="title-bar">
		<header>
			<h1><?php echo page()->title()->html() ?></h1>
			<div>
				<?php echo page()->description()->kt() ?>
			</div>
		</header>
	</div>

	<div id="percorsi-container">

	<?php foreach (page()->children() as $item): ?>

		<section>

			<div class="percorsi-media-container">

			<?php if ($item->movie()->isNotEmpty() ): ?>

				<div class="video" aria-label="<?php echo $item->alt_video() ?>">
		            <iframe src="https://player.vimeo.com/video/<?php echo $item->movie() ?>" allowFullScreen></iframe>
	          	</div>

			<?php else: ?>

				<img src="<?php echo $item->image($item->cover())->url() ?>">

			<?php endif ?>

			</div>

			<div class="percorsi-content-container">
				<header>
					<h2><?php echo $item->title() ?></h2>
				</header>

				<?php echo $item->description()->kt() ?>

			</div>

		</section>

	<?php endforeach ?>

	</div>

</main>

<?php snippet('footer-ricerca') ?>