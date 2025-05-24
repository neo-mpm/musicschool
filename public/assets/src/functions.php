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
  }
  // // タイトルが'トップページ'の場合、ページタイトルと説明を設定
  // elseif ($page_title == '') {
  //   $meta_tags['page_title'] = $page_title . ' | ' . $site_name;
  //   $meta_tags['description'] = $meta_tags['page_title'] . 'の' . $page_title . 'です。';
  // }
  // それ以外の場合、ページタイトルと説明を設定
  else {
    $meta_tags['page_title'] = $page_title . ' | ' . $site_name;
    $meta_tags['description'] = $site_name . 'の' . $page_title . 'のページです。';
  }

  // メタタグ配列を返す
  return $meta_tags;
}

// /**
//  * 著作権範囲を返します。
//  *
//  * この関数は、現在の年と開始年に基づいて著作権範囲を計算します。
//  * 開始年が現在の年と同じ場合は、開始年のみを返します。
//  * そうでない場合は、"startYear~currentYear"の形式で範囲を返します。
//  *
//  * @return string 著作権範囲。
//  */
// function getCopyrightRange()
// {
//   // 現在の年を取得します。
//   $currentYear = date('Y');

//   // 開始年を取得します。
//   $startYear = EST;

//   // 開始年が現在の年と同じかどうかをチェックします。
//   if ($startYear === $currentYear) {
//     // もし同じであれば、開始年のみを返します。
//     return $startYear;
//   }

//   // もし異なる場合は、"startYear~currentYear"の形式で範囲を返します。
//   return $startYear . '～' . $currentYear;
// }
