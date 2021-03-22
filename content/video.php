<?php $item = $template_args['item'];?>
<?php $video = $item['video']?>
<div class="container">
<div class="row pt-5">
		<div class="col-12">
            <div class="video">
            <?php if ($video) :  ?>
            <?= $video ?>
            <?php endif ;?>
            </div>
		</div>
    </div>
    </div>