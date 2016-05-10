<h2><?php echo $title;?></h2>
<?php foreach ($news as $v) : ?>
    <h3><?php echo $v['title'];?></h3>
    <div><?php echo $v['text'];?></div>
    <p><a href="<?php echo site_url('news/'.$v['slug']); ?>">View article</a></p>
<?php endforeach;