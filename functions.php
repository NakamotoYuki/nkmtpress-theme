<?php
register_sidebar(
array(
    'id' => 'sidebar-1',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    'before_widget' => '<div class="list-group list-group-flush right-cate">',
    'after_widget'  => '</div>',
)
);
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_filter('widget_title', 'remove_widget_title_all');
function remove_widget_title_all($widget_title)
{
    return;
}

function index($index){
  $index = $index.split(",");
  $index_template = "<div class = mokujiy>";
  $index_template .= "<ul>";
  foreach ($index as $value) {
    $index_template .= "<li>".$value."</li>";
  }
  $index_tmplate .= "</ul>";
  $index_template .="</div>";
}

$args = array(
  "posts_per_page" => 10,//取得数は10に制限
);

$query = new WP_Query($args);
$paged = get_query_var('page', 1);


function paginations($paged='')
{
    $args = array(
  "posts_per_page" => 10,//取得数は10に制限
);

    $query = new WP_Query($args);
    $total_page = $query->found_posts;
    $per_page = $query->post_count;
    $paginate_pages = ceil($total_page/$per_page);
    $back_num = abs($paged-1);
    $next_num = ($paged < $paginate_pages)? $paged+1 : $paged;

    $pagination_template = '<nav aria-label="Page navigation example"><ul class="pagination"><li class="page-item page-link"><a href="/page/'.$back_num.'">戻る</a></li>';

    for ($i=1; $i <= $paginate_pages ; $i++) {
        if ($i == $paged) {
            $pagination_template .= '<li class="page-item page-link text-muted">'.$i.'</li>';
        } else {
            $pagination_template .= '<li class="page-item page-link"><a href="/page/'.$i.'">'.$i.'</a></li>';
        }
    }
    $pagination_template .= '<li class="page-item page-link"><a href="/page/'.$next_num.'">進む</a></li>';
    $pagination_template .= '</nav>';

    echo $pagination_template;
}
