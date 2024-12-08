<?php
/**
 * LanguagePage.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%language_page}}".
 *
 * @property int $pk Page PK
 * @property string $page_lang Language Code
 * @property string $slug Page Slug
 * @property string $title Page Title
 * @property string|null $subtitle Subtitle
 * @property string|null $description Description
 * @property string|null $keywords Keywords
 * @property string|null $lead Page Lead
 * @property string|null $origin Substack Origin
 * @property string|null $origin_link Origin Link
 * @property string|null $body_content Body Content
 *
 * @property Language $pageLang
 */
class LanguagePage extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return '{{%language_page}}';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['page_lang', 'slug', 'title'], 'required'],
			[['title', 'subtitle', 'description', 'keywords', 'lead', 'origin', 'origin_link', 'body_content'], 'string'],
			[['page_lang'], 'string', 'max' => 4],
			[['slug'], 'string', 'max' => 12],
			[['page_lang'], 'exist', 'skipOnError' => true, 'targetClass' => Language::class, 'targetAttribute' => ['page_lang' => 'lang_code']],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'pk' => 'Page PK',
			'page_lang' => 'Language Code',
			'slug' => 'Page Slug',
			'title' => 'Page Title',
			'subtitle' => 'Subtitle',
			'description' => 'Description',
			'keywords' => 'Keywords',
			'lead' => 'Page Lead',
			'origin' => 'Substack Origin',
			'origin_link' => 'Origin Link',
			'body_content' => 'Body Content',
		];
	}

	/**
	 * Gets query for [[PageLang]].
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getPageLang()
	{
		return $this->hasOne(Language::class, ['lang_code' => 'page_lang']);
	}
}
