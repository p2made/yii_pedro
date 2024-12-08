<?php
/**
 * @frontend/modules/letter/layouts/head.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

use yii\bootstrap5\Html;

$canonicalUrl = $this->params['canonicalUrl'];
$title = $this->params['title'];
$keywords = $this->params['keywords'];
$description = $this->params['description'];
$author = $this->params['author'];
$updated = $this->params['updated'];
$metaAssetUrl = $this->params['metaAssetUrl'];

$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
// Canonical link
$this->registerLinkTag(['rel' => 'canonical', 'href' => $canonicalUrl]);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
// Meta tags for SEO
$this->registerMetaTag(['name' => 'description', 'content' => $description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
$this->registerMetaTag(['name' => 'author', 'content' => $author]);
// Open Graph Meta Tags
$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);
$this->registerMetaTag(['property' => 'og:url', 'content' => $canonicalUrl]);
$this->registerMetaTag(['property' => 'og:title', 'content' => $title]);
$this->registerMetaTag(['property' => 'og:description', 'content' => $description]);
$this->registerMetaTag(['property' => 'og:image', 'content' => $metaAssetUrl . '/img/og_image-1200x0630.jpeg']);
$this->registerMetaTag(['property' => 'og:updated_time', 'content' => $updated]);
//$this->registerMetaTag(['property' => 'og:locale', 'content' => $locale]);
// Twitter
$this->registerMetaTag(['property' => 'twitter:card', 'content' => 'summary_large_image']);
$this->registerMetaTag(['property' => 'twitter:url', 'content' => $canonicalUrl]);
$this->registerMetaTag(['property' => 'twitter:title', 'content' => $title]);
$this->registerMetaTag(['property' => 'twitter:description', 'content' => $description]);
$this->registerMetaTag(['property' => 'twitter:image', 'content' => $metaAssetUrl . '/img/og_image-1200x0630.jpeg']);
// Favicon
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => $metaAssetUrl . '/ico/favicon-96x96.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/svg+xml', 'href' => $metaAssetUrl . '/ico/favicon.svg']);
$this->registerLinkTag(['rel' => 'shortcut icon', 'href' => $metaAssetUrl . '/ico/favicon.ico']);
$this->registerLinkTag(['rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '180x180', 'href' => $metaAssetUrl . '/ico/apple-touch-icon.png']);
$this->registerMetaTag(['name' => 'apple-mobile-web-app-title', 'content' => $title]);
$this->registerLinkTag(['rel' => 'manifest', 'href' => $metaAssetUrl . '/ico/site.webmanifest']);
?>
<title><?= $title ?></title><!-- DATA -->
<?php $this->registerCsrfMetaTags() ?>
<?php $this->head() ?>
