
<?php $item = $template_args['item'];?>
<?php
$type = $item['type'];
$grey = $item['grey'];
$image = $item['image'];
$title = $item['title'];
$content = $item['content'];
$dodaj_do_koszyka = $item['dodaj_do_koszyka'];
$link = $item['link'];
$file = $item['file'];

$flex = $item['flex'];
$class = 'flex--'.$type;

?>

 <div class="flex <?= $class; ?>">
  <?php if ($image):?>
  <div class=" flex__img">
    <img src="<?= $image['url'] ?>" alt="">
  </div>
  <?php endif?>
  <div class="flex__content">
    <?php if ($title):?>
    <h3>
      <?= ($title)?>
    </h3>
    <?php endif?>
    <?php if ($content):?>
    <p>
      <?= ($content)?>
    </p>
    <?php endif?>
    <?php if ($link):?>
        <?php $url = $link['url'];?>
        <?php if ($file ):?>
            <?php $url = $file['url']?>
        <?php endif ;?>
        <a  class="my-button flex__button" href="<?= ($url)?>"><?= $link['title']?></a>
    <?php endif ;?>
    
  </div>
</div> 




	