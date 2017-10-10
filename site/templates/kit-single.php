<?php snippet('header') ?>

<main id="kit-single" class="<?php echo page()->parent()->title() ?>">
	<div id="title-bar">
		<header>
			<h1 ><?php echo page()->title()->html() ?></h1>
			<h2><?php echo page()->parent()->title() ?></h2>
			<div>
				<div>
				<?php if (page()->icon()->isNotEmpty() ): ?>
					<img src="<?php echo page()->image(page()->icon())->url() ?>">
				<?php endif ?>
				</div>
				<?php echo page()->description()->kt() ?>
			</div>
		</header>
	</div>

	<!-- MAIN ARTICLE -->

	<article>

		<!-- INDEX -->
		<aside>
			<div>
				<h2><?php echo l::get('index') ?></h2>
				<ul>
				<?php foreach (page()->article()->toStructure() as $article): ?>
					<li><a href="#<?php echo str_replace(' ', '-', strtolower($article->section_title())) ?>"><?php echo $article->section_title() ?></a></li>
				<?php endforeach ?>
				</ul>
			</div>
		</aside>
		<!-- end: INDEX -->

		<header class="visuallyhidden">
			<h1><?php echo page()->title() ?></h1>	
		</header>

		<!-- CONTENT -->
		<div id="single-article-container">
		<?php foreach (page()->article()->toStructure() as $article): ?>
			<h2  id="<?php echo str_replace(' ', '-', strtolower($article->section_title())) ?>"><?php echo $article->section_title() ?></h2>
			<?php echo $article->content()->kt()->html() ?>
		<?php endforeach ?>
		<!-- end: CONTENT -->
		</div>

	</article>

	<!-- end: MAIN ARTICLE -->

	<!-- MORE -->
	<?php 		
		$offset = 1 + $page->siblings(false)->visible()->indexOf($page);
		$coll = $page->siblings(false)->visible()->offset($offset)->limit(3);
		if ($coll->count() < 3) {
			$coll2 = $page->siblings(false)->visible()->limit(3 - $coll->count());
			$coll = $coll->merge($coll2);
		}
	?>
	<?php if ($coll->count()): ?>
			
		<div id="more-articles">
			<div>
				<h2><?php echo l::get('more') ?></h2>
				
				<ul>
					<?php foreach( $coll as $kit): ?>
						<a href="<?php echo $kit->url() ?>">
							<li>
							<?php if ($kit->icon()->isNotEmpty() ): ?>
								<img src="<?php echo $kit->image($kit->icon())->url() ?>">
							<?php endif ?>
							<div>
								<h3><?php echo $kit->title() ?></h3>
								<?php echo $kit->description()->kt() ?>
							</div>
							</li>
						</a>
					<?php endforeach ?>

					<?php if (count($coll) < 3): ?>
					
					<?php endif ?>
				</ul>
			</div>

		</div>

	<?php endif ?>
	<!-- end: MORE -->

</main>

<?php snippet('footer') ?>