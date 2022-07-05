<?php

//新規タグ追加に、並び順フィールドを追加
function fit_add_post_tag_fields() {
    echo '<div class="form-field">
        　<label for="term_order">並び順</label></th>
            <input type="number" min="0" name="term_order" id="term_order" value="" size="40"></<input>
            <p>タグの並び順を入力してください。</p>
         </div>';
}
add_action('post_tag_add_form_fields', 'fit_add_post_tag_fields');

// タグ編集画面に、並び順フィールドを追加
function fit_edit_post_tag_fields( $tag ) {

    // 設定済みの並び順を取得
    $term = null;
    $term = get_term( $tag->term_id, 'post_tag', 1 );
    $value = $term->term_order;

    echo '<tr class="form-field">

             <th><label for="term_order">並び順</label></th>
             <td>
                 <input type="number" min="0" name="term_order" id="term_order" size="40" value="'.$value.'">
                 <p class="description">タグの並び順を入力してください。</p>
             </td>
          </tr>';
}
add_action( 'post_tag_edit_form_fields', 'fit_edit_post_tag_fields' );

// フィールド値を保存
function fit_save_post_tag_terms( $term_id ) {

    global $wpdb;

    // 並び順が追加・更新されていれば
    if ( array_key_exists('term_order', $_POST) ) {
        $result = $wpdb->update( $wpdb->terms, array('term_order' => $_POST['term_order'] ), array( 'term_id' => $term_id) );

        if( false === $result ) {
            $query = "ALTER TABLE $wpdb->terms ADD `term_order` INT( 4 ) NULL DEFAULT '0'";
            $result = $wpdb->query($query);
        }
        $result = $wpdb->update( $wpdb->terms, array('term_order' => $_POST['term_order'] ), array( 'term_id' => $term_id) );
    }
}
add_action( 'create_post_tag', 'fit_save_post_tag_terms' );  //新規追加用フック
add_action( 'edit_post_tag', 'fit_save_post_tag_terms' );   //編集ページ用フック

$fit_term_order = new Fit_post_tag_order();

class Fit_post_tag_order {

	function __construct() {
		add_filter( 'wp_get_object_terms', array( $this, 'fit_get_object_terms' ), 10, 3 );
        add_filter( 'get_terms', array( $this, 'fit_get_object_terms' ), 10, 3 ); //一覧のソート部分

        global $wpdb;

        $query = "SHOW COLUMNS FROM $wpdb->terms 
                    LIKE 'term_order'";
        $result = $wpdb->query($query);

        if ($result == 0) {
            $query = "ALTER TABLE $wpdb->terms ADD `term_order` INT( 4 ) NULL DEFAULT '0'";
            $result = $wpdb->query($query); 
        }
    }

    //タグ一覧画面に並び順でソートして表示する
	function fit_get_object_terms( $terms ) {

        $tags = array( 'post_tag' );

		if ( is_admin() && isset( $_GET['orderby'] ) ) return $terms;
		
		foreach( $terms as $key => $term ) {
			if ( is_object( $term ) && isset( $term->taxonomy ) ) {
				$taxonomy = $term->taxonomy;
				if ( !in_array( $taxonomy, $tags ) ) return $terms;
			} else {
				return $terms;
			}
		}

        // 配列の並び替え
        usort( $terms, array( $this, 'taxcmp' ) );
		return $terms;
	}

    // 順番を指定するコールバック関数
	function taxcmp( $a, $b ) {
		if ( $a->term_order ==  $b->term_order ) return 0;
		return ( $a->term_order < $b->term_order ) ? -1 : 1;
	}

}

?>