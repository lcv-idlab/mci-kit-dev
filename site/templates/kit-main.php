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

	<!-- SECOND NAV -->

	<nav id="categories-nav">
		<ul>
			<?php foreach (page()->children() as $cat): ?>
				<a href="#<?php echo str_replace(' ', '-', strtolower($cat->title())) ?>" class="<?php echo str_replace(' ', '-', strtolower($cat->title())) ?>"><li><?php echo ucfirst($cat->title()) ?></li></a>
			<?php endforeach ?>
		</ul>
	</nav>

	<!-- end: SECOND NAV -->

	<!-- CATEGORIES WITH SINGLE KITS -->

	<div id="categories-container">

	<?php foreach ($page->children() as $cat): ?>

		<section id="<?php echo $cat->title() ?>">

			<!-- CATEGORY TITLE -->
			<header>
				<h2><?php echo ucfirst($cat->title()) ?></h2>
				<?php echo $cat->description()->kt() ?>
				<div class="cat-button-open">
					<span class="cat-button-open-span"></span>
					<span class="cat-button-open-span"></span>
				</div>
			</header>
			<!-- end: CATEGORY TITLE -->

			<!-- SINGLE KITS -->
			<div class="single-kits-container" id="<?php echo "cont_".$cat->title() ?>">
			<?php foreach ($cat->children()->visible() as $kit): ?>
			<a href="<?php echo $kit->url() ?>">		
				<article>
					<div class="article-content-container">
						<aside>
							<img src="<?php echo $kit->image($kit->icon())->url() ?>">
						</aside>
						<div>
							<header>
								<h3><?php echo ucfirst($kit->title()) ?></h3>
							</header>
							<?php echo $kit->description()->kt() ?>
						</div>
					</div>
				</article>
			</a>
			<?php endforeach ?>
			</div>
			<!-- end: SINGLE KITS -->
			
		</section>

	<?php endforeach ?>
	</div>

	<!-- end: CATEGORIES WITH SINGLE KITS -->

</main>

<?php snippet('footer') ?>