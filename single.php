<?php get_header();?>
  <div class="container">
      <div class="tab_box is_show" id="summary">
        <div class="row">

            <div class="col-md-10 mb-4 bg-light">
<?php if (have_posts()) : ?>                  <!-- 記事があるかどうかを確認する -->

  <?php while (have_posts()) : the_post(); ?>
    <h2 class = "pl-2"><?php the_title(); ?></h2>
    <span class="badge"><?php the_category('</span><span class="badge ml-1">'); ?></span>
    <p><?php the_time('Y年n月j日'); ?></p>
    <?php the_content(); ?>
    <hr>
  <?php endwhile; ?>                            <!-- 繰り返しの最初に戻る -->

<?php else : ?>                                 <!-- 記事がなかった場合の記述 -->
  <p>記事がありませんでした</p>                     <!-- この内容を表示 -->
<?php endif; ?>                                 <!-- 記事があるかどうかを確認を終了 -->

        </div>
      <?php get_sidebar(); ?>
        </div>
      </div>

    </div>
<?php get_footer(); ?>
