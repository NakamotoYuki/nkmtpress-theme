<?php get_header(); ?>
        <div class="container">
<div class="row">
<div class="col-md-10 order-md-1">


          <div class="row">
            <?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?> <!-- 繰り返しを開始。記事がある場合は、その中から一つめを取得 -->
            <div class="col-md-6 mb-4">
              <div class="card shadow-sm">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large', array( 'class' => 'card-img-top' )); ?>
                <?php else : ?>
                  <img width="800" height="600" src="<?php echo get_template_directory_uri(); ?>/img/dish.jpg" class="card-img-top wp-post-image" sizes="(max-width: 800px) 100vw, 800px">
                <?php endif ; ?>
                <div class="card-body">
                  <h4><small><?php the_title(); ?></small></h4>
                  <p class="card-text"><?php the_excerpt() ?></p>
                  <div class="d-flex justify-content-end align-items-right">
                    <a class="btn btn-sm btn-outline-secondary" href="<?php the_permalink(); ?> ">続きを見る</a>
                  </div>
                </div>
              </div>
            </div>
              <?php endwhile; ?>                            <!-- 繰り返しの最初に戻る -->

<?php else : ?>                                 <!-- 記事がなかった場合の記述 -->
  <p>記事がありませんでした</p>                     <!-- この内容を表示 -->
<?php endif; ?>                                 <!-- 記事があるかどうかを確認を終了 -->

          </div>

<?php paginations($paged); ?>

                </div>

      <?php get_sidebar(); ?>
      </div>
        </div>
        
        </div>

<?php get_footer(); ?>
