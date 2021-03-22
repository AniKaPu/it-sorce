<?php $item = $template_args['item'];?>
<?php $ramka = $item['ramka']?>


<div class="container">
<div class="row">
		<div class="col-12">
			<div class="ramka ramka__cols">
				<?php if ($ramka) :?>
				<?= $ramka ?>
				<?php endif ;?>
			</div>
		</div>
    </div>
</div>