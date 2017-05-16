<?php snippet('header-ricerca') ?>

<main>

	<h1 class="title"><?php echo page()->title()->html() ?></h1>

	<div class="contacts-contacts">
		<address><?php echo page()->main()->kt() ?></address>
		<ul>
		<?php foreach( page()->contacts()->toStructure() as $contact ): ?>
			<li>
				<address>
					<strong><?php echo $contact->name()->html() ?> <?php echo $contact->surname()->html() ?></strong>
					<?php echo $contact->phone()->kt() ?>
					<a href="mailto:<?php echo $contact->email()->html() ?>"><?php echo $contact->email()->html() ?></a>
				</address>
			</li>
		<?php endforeach ?>
		</ul>
	</div>

	<section class="contacts-colophon">
		<h2 class="title">colophon</h2>

		<div class="colophon-container">

			<div class="colophon-section">

				<div class="colophon-coordinamento">
					<h3>Coordinamento</h3>
					<ul>
					<?php foreach ( page('ricerca/progetto/team')->people()->toStructure() as $people ): ?>
						 <?php if($people->colophon() == "coordinamento"): ?>
						<li><a href="<?php echo page('ricerca/progetto/team')->url() ?>/#<?php echo str_replace(' ', '_', strtolower($people->name()->html())) ?>_<?php echo str_replace(' ', '_', strtolower($people->surname())) ?>"><?php echo $people->name()->html() ?> <?php echo $people->surname() ?></a></li>
						 <?php endif ?>
					<?php endforeach ?>
					</ul>
				</div>

				<div class="colophon-collaborazione">
					<h3>In collaborazione con</h3>
					<ul>
					<?php foreach ( page('ricerca/progetto/team')->people()->toStructure() as $people ): ?>
						 <?php if($people->colophon() == "collaborazione"): ?>
						<li><a href="<?php echo page('ricerca/progetto/team')->url() ?>/#<?php echo str_replace(' ', '_', strtolower($people->name()->html())) ?>_<?php echo str_replace(' ', '_', strtolower($people->surname())) ?>"><?php echo $people->name()->html() ?> <?php echo $people->surname() ?></a></li>
						 <?php endif ?>
					<?php endforeach ?>
					</ul>
				</div>

			</div>

			<div class="colophon-section">

				<div class="colophon-promosso">
					<h3>Promosso da</h3>
					<ul>
					<?php foreach ( page('ricerca/progetto/promotori')->promotori()->toStructure() as $promotori ): ?>
						<li><a href="<?php echo page('ricerca/progetto/promotori')->url() ?>/#<?php echo strtolower($promotori->name()->html()) ?>"><?php echo $promotori->name()->html() ?></a></li>
					<?php endforeach ?>
					</ul>
				</div>

				<div class="colophon-partner">
					<h3>Partners</h3>
					<ul>
					<?php foreach ( page('ricerca/progetto/partner')->partners()->toStructure() as $partner ): ?>
						<li><a href="<?php echo page('ricerca/progetto/partner')->url() ?>/#<?php echo str_replace(' ', '_', strtolower($partner->name()->html())) ?>"><?php echo $partner->name()->html() ?></a></li>
					<?php endforeach ?>
					</ul>
				</div>

			</div>

			<div class="colophon-section">
				<h3>Sostenuto da</h3>
				<ul>
				<?php foreach ( page('ricerca/footer-ricerca/enti-sostenitori')->sostenitori()->toStructure() as $item ): ?>
					<li><?php echo $item->name()->html() ?></li>
				<?php endforeach ?>
				</ul>
			</div>

		</div>

	</section>

</main>

<?php //snippet('enti-promotori') ?>
<?php //snippet('enti-sostenitori') ?>
<?php snippet('footer-ricerca') ?>