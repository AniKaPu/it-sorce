
<?php $item = $template_args['item'];?>
<?php 
	$autor = $item['autor'];
    ?>
<div class="author-container">

<div class="author">

		<div class="author--img">
            <?php if ($autor['obraz']):?>
                
                    <img src="<?= ($autor['obraz'])?>" alt="">
                
            <?php endif?>
		</div>
		<div class="author--text">
            <?php if ($autor['tekst']):?>
                
            <?php echo ($autor['tekst'])?>
            
			<?php endif?>
	

</div>
    
</div>