<?php

/**
 * 静的ウェブサイトをphpで開発して、納品時に静的htmlへと変換する。
 * phpファイル内でのサイト内リンクは全てディレクトリにすること(index.phpでアクセスできるように作成する)
 *
 * @author ao-system, Inc.
 * @date 2024-04-29
 */
class HtmlPublish
{

  //.htmlへと変換するphpファイルを列挙
  private const PHP_FILE_LIST = [
    '/blog/index.php',
    '/blog/details.php',
    '/contact/index.php',
    '/contact/send.php',
    '/plan/index.php',
    '/result/index.php',
    '/result/details.php',
    '/search/index.php',
    '/404.php',
    '/index.php',
  ];
  private const URL = 'http://localhost:5500';    //httpアクセスのドキュメントルート
  private const DIR_SRC = '../public';    //ドキュメントルートのファイルパス
  private const DIR_DST = '../publish';    //出力場所

  public function __construct()
  {
    $this->out('# publish start');    //進行状況標準出力
    $this->publishFile();
    $this->publishHtml();
    $this->out('# publish end');    //進行状況標準出力
  }

  /**
   * 拡張子php以外のファイルをディレクトリ構造そのままで全てコピー
   *
   * @return void
   */
  private function publishFile(): void
  {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(self::DIR_SRC));
    foreach ($iterator as $file) {
      if ($file->isDir()) {
        $destination = self::DIR_DST . DIRECTORY_SEPARATOR . $iterator->getSubPathName();
        if (!is_dir($destination)) {
          mkdir($destination, 0777, true);
        }
      } else {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if ($extension !== 'php') {
          $destination = self::DIR_DST . DIRECTORY_SEPARATOR . $iterator->getSubPathName();
          copy($file, $destination);
          $this->out($destination);    //進行状況標準出力
        }
      }
    }
  }

  /**
   * 拡張子phpのファイルをhttpスキームで取得してhtmlに展開してファイル保存
   *
   * @return void
   */
  private function publishHtml(): void
  {
    foreach (self::PHP_FILE_LIST as $file) {
      //ファイルをhttpスキームで読み込み
      $content = file_get_contents(self::URL . $file);
      //出力パス
      $outputPath = self::DIR_DST . str_replace('.php', '.html', $file);
      // 出力先ディレクトリが存在しない場合は再帰的に作成する
      $outputDir = dirname($outputPath);
      if (!file_exists($outputDir)) {
        mkdir($outputDir, 0777, true);
      }
      //html書き出し
      file_put_contents($outputPath, $content);
      $this->out($outputPath);    //進行状況標準出力
    }
  }

  /**
   * 標準出力
   *
   * @param string $str
   * @return void
   */
  private function out(string $str): void
  {
    print $str . '<br>';
  }
}
new HtmlPublish();
