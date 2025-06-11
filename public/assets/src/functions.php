<?php

/**
 * ファイルのタイムスタンプクエリパラメータを付加したURLを取得します。
 *
 * @param string $file_name ファイルのパス。
 * @param string|null $output_name ファイル出力名。
 * @return string ファイルのタイムスタンプクエリパラメータを付加したURL。
 */
function get_file_url_with_timestamp($file_name, $output_name = null)
{
  // ファイルが存在するかチェック
  if (file_exists($file_name)) {
    // ファイルのタイムスタンプを取得
    $timestamp = date('ymdHis', filemtime($file_name));

    // 出力名を設定
    if (isset($output_name)) {
      $file_name = $output_name;
    }

    // ファイルURLにタイムスタンプを付加
    return "$file_name?date=$timestamp";
  }

  // ファイルが存在しない場合、URLに'file_not_found'を付加
  return "$file_name?file_not_found";
}

/**
 * HTMLメタタグを設定します。
 *
 * @param string|null $page_title ページのタイトル。
 * @param string $site_name サイトの名前。
 * @return array HTMLメタタグ。
 */
function set_meta_tags($page_title, $site_name)
{
  // メタタグ配列を初期化
  $meta_tags = [
    'page_title' => '',
    'description' => '',
  ];

  // タイトルが設定されていない場合、ページタイトルと説明を設定
  if ($page_title == '') {
    $meta_tags['page_title'] = $site_name;
    $meta_tags['description'] = $site_name . 'のホームページです。';
  } else {
    $meta_tags['page_title'] = $page_title . ' | ' . $site_name;
    $meta_tags['description'] = $site_name . 'の' . $page_title . 'のページです。';
  }

  // メタタグ配列を返す
  return $meta_tags;
}
