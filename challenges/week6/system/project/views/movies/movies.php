<div class="movies">
   
        <?php $movies; ?>
        
        <?php foreach ($movies as $movie) : ?>
        <a href="<?php echo $movie->getUrl(); ?>">
        <div class="movie">
                <div class="name"><?php echo $movie->name; ?></div> 
                <div class="year"><?php echo $movie->year; ?></div> 
                <div class="rating"><?php echo $movie->rating; ?></div>
       </div>
        </a>
        <? endforeach ?>
   
</div>