<?php
//////////////////////////////////////////////////
//下記ユーザーカスタマイズエリア
//////////////////////////////////////////////////
//
function hook_widget_categories( $args ){
$args['hide_empty'] = 0;
return $args;
}
add_filter( 'widget_categories_args', 'hook_widget_categories');
add_filter( 'widget_categories_dropdown_args', 'hook_widget_categories' ); 


function custom_wp_tag_cloud($args) {
 $myargs = array(
 'orderby' => 'count', //使用頻度順
 'order' => 'DESC', // 使用の多い順
 'number' => 20// 表示数
 );
 $args = wp_parse_args($args, $myargs);
 return $args;
}
add_filter( 'widget_tag_cloud_args', 'custom_wp_tag_cloud' );


//timelineショートコードコンテンツ内に余計な改行や文字列が入らないように除外
if ( !function_exists( 'remove_wrap_shortcode_wpautop' ) ):
function remove_wrap_shortcode_wpautop($shortcode, $content){
  //tiショートコードのみを抽出
  $pattern = '/\['.$shortcode.'.*?\].*?\[\/'.$shortcode.'\]/is';
  if (preg_match_all($pattern, $content, $m)) {
    $all = null;
    foreach ($m[0] as $code) {
      $all .= $code;
    }
    return $all;
  }
}
endif;
 

//タイムラインの作成（timelineショートコード）
add_shortcode('timeline', 'timeline_shortcode');
if ( !function_exists( 'timeline_shortcode' ) ):
function timeline_shortcode( $atts, $content = null ){
  extract( shortcode_atts( array(
    'title' => null,
  ), $atts ) );
  $content = remove_wrap_shortcode_wpautop('ti', $content);
  $content = do_shortcode( shortcode_unautop( $content ) );
  $title_tag = null;
  if ($title) {
    $title_tag = '<div class="timeline-title">'.$title.'</div>';
  }
  $tag = '<div class="timeline-box">'.
            $title_tag.
            '<ul class="timeline">'.
              $content.
            '</ul>'.
          '</div>';
  return apply_filters('timeline_tag', $tag);
}
endif;
 
//タイムラインアイテム作成（タイムラインの中の項目）
add_shortcode('ti', 'timeline_item_shortcode');
if ( !function_exists( 'timeline_item_shortcode' ) ):
function timeline_item_shortcode( $atts, $content = null ){
  extract( shortcode_atts( array(
    'title' => null,
    'label' => null,
  ), $atts ) );
  $title_tag = null;
  if ($title) {
    $title_tag = '<div class="timeline-item-title">'.$title.'</div>';
  }
 
  $content = do_shortcode( shortcode_unautop( $content ) );
  $tag = '<li class="timeline-item">'.
            '<div class="timeline-item-label">'.$label.'</div>'.
            '<div class="timeline-item-content">'.
              '<div class="timeline-item-title">'.$title.'</div>'.
              '<div class="timeline-item-snippet">'.$content.'</div>'.
            '</div>'.
          '</li>';
  return apply_filters('timeline_item_tag', $tag);
}
endif;


//寄稿者権限でもメディアをアップロード
if ( current_user_can('contributor') && !current_user_can('upload_files') ){
    add_action('admin_init', 'allow_contributor_uploads');
}

function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}
