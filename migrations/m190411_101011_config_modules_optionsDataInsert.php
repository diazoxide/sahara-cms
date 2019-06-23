<?php

use yii\db\Migration;

class m190411_101011_config_modules_optionsDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%config_modules_options}}',
            [
                "id",
                "module_id",
                "app_id",
                "name",
                "value",
                "is_object",
                "type_id",
                "parent_id",
                "sort",
                "created_at",
                "updated_at"
            ],
            [
                [
                    'id' => '1',
                    'module_id' => '26',
                    'app_id' => 'admin',
                    'name' => 'controllerNamespace',
                    'value' => 'diazoxide\\blog\\controllers\\backend',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '8000',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '452',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'controllerNamespace',
                    'value' => 'diazoxide\\blog\\controllers\\frontend',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '4600',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '453',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'backendViewPath',
                    'value' => '@vendor/diazoxide/yii2-blog/views/backend',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '4700',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '454',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'frontendViewPath',
                    'value' => '@vendor/diazoxide/yii2-blog/views/frontend',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '4800',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '455',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'frontendViewsMap',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '4900',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '456',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'frontendLayoutMap',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5000',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '457',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'frontendTitleMap',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5100',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '458',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'urlManager',
                    'value' => 'urlManager',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5200',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '459',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'imgFilePath',
                    'value' => '@public/uploads/img/blog',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5300',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '460',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'imgFileUrl',
                    'value' => '/uploads/img/blog',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5400',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '461',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'adminAccessControl',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5500',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '462',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'blogPostPageCount',
                    'value' => '10',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5600',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '463',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'blogCommentPageCount',
                    'value' => '20',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5700',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '464',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'enableComments',
                    'value' => '1',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5800',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '465',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'enableBooks',
                    'value' => '1',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '5900',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '466',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'enableLocalComments',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6000',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '467',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'enableFacebookComments',
                    'value' => '1',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6100',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '468',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'showBannerInPost',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6200',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '469',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'showClicksInPost',
                    'value' => '0',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6300',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '470',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'showClicksInArchive',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6400',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '471',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'showDateInPost',
                    'value' => '1',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6500',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '472',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'dateTypeInPost',
                    'value' => 'dateTime',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6600',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '474',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'schemaOrg',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '6800',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '476',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'enableShareButtons',
                    'value' => '1',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7000',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '477',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'redactorModule',
                    'value' => 'redactorBlog',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7100',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '478',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'userModel',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7200',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '479',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'userPK',
                    'value' => 'id',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7300',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '480',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'userName',
                    'value' => 'username',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7400',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '481',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'blogTheme',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7500',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '482',
                    'module_id' => '26',
                    'app_id' => 'public',
                    'name' => 'homeTitle',
                    'value' => 'sahara_cms',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7600',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '484',
                    'module_id' => '26',
                    'app_id' => null,
                    'name' => 'htmlClass',
                    'value' => 'diazoxide_blog',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '7800',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '551',
                    'module_id' => '29',
                    'app_id' => null,
                    'name' => 'db',
                    'value' => 'db',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '10200',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '552',
                    'module_id' => '29',
                    'app_id' => null,
                    'name' => 'sessionTable',
                    'value' => '{{%session}}',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '10300',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '604',
                    'module_id' => '36',
                    'app_id' => '',
                    'name' => 'timeZone',
                    'value' => 'Asia/Yerevan',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '11900',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '605',
                    'module_id' => '36',
                    'app_id' => '',
                    'name' => 'defaultTimeZone',
                    'value' => 'Asia/Yerevan',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12000',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '606',
                    'module_id' => '36',
                    'app_id' => '',
                    'name' => 'dateFormat',
                    'value' => 'php:Y-m-d',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12100',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '607',
                    'module_id' => '36',
                    'app_id' => '',
                    'name' => 'timeFormat',
                    'value' => 'php:H:i:s',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12200',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '608',
                    'module_id' => '36',
                    'app_id' => '',
                    'name' => 'datetimeFormat',
                    'value' => 'php:Y-m-d H:i:s',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12300',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '610',
                    'module_id' => '36',
                    'app_id' => null,
                    'name' => 'decimalSeparator',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12500',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '611',
                    'module_id' => '36',
                    'app_id' => null,
                    'name' => 'thousandSeparator',
                    'value' => '',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12600',
                    'created_at' => '0',
                    'updated_at' => '0',
                ],
                [
                    'id' => '653',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'homeDescription',
                    'value' => 'Հայկական լրատվության անկողմնակալ հարթակ։ Քաղաքական և անցուդարձային լուրեր, վերլուծություններ և մեկնաբանություններ․',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12700',
                    'created_at' => '1554284188',
                    'updated_at' => '1554284188',
                ],
                [
                    'id' => '654',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'homeKeywords',
                    'value' => 'Հայկական լրատվություն քաղաքական իրավական սկանդալային շտապ պատահարներ',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '12800',
                    'created_at' => '1554284250',
                    'updated_at' => '1554654839',
                ],
                [
                    'id' => '655',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'publisher',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '474',
                    'sort' => '0',
                    'created_at' => '1554485947',
                    'updated_at' => '1554485947',
                ],
                [
                    'id' => '656',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'logo',
                    'value' => '/uploads/img/logo/sahara.png',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '655',
                    'sort' => '0',
                    'created_at' => '1554485998',
                    'updated_at' => '1554546045',
                ],
                [
                    'id' => '657',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'logoWidth',
                    'value' => '200',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '655',
                    'sort' => '-100',
                    'created_at' => '1554486053',
                    'updated_at' => '1554486053',
                ],
                [
                    'id' => '658',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'logoHeight',
                    'value' => '43',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '655',
                    'sort' => '-200',
                    'created_at' => '1554486074',
                    'updated_at' => '1554486074',
                ],
                [
                    'id' => '659',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'name',
                    'value' => 'sahara_cms',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '655',
                    'sort' => '-300',
                    'created_at' => '1554486096',
                    'updated_at' => '1554486096',
                ],
                [
                    'id' => '660',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'phone',
                    'value' => '+374 (93) 022-045',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '655',
                    'sort' => '-400',
                    'created_at' => '1554486123',
                    'updated_at' => '1554486123',
                ],
                [
                    'id' => '661',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'address',
                    'value' => '89/45 Admiral Isakov Ave, Yerevan 0004',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '655',
                    'sort' => '-500',
                    'created_at' => '1554486162',
                    'updated_at' => '1554486162',
                ],
                [
                    'id' => '687',
                    'module_id' => '38',
                    'app_id' => '',
                    'name' => 'useFileTransport',
                    'value' => '1',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '13500',
                    'created_at' => '1554706424',
                    'updated_at' => '1554706424',
                ],
                [
                    'id' => '688',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'social',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '13600',
                    'created_at' => '1554709417',
                    'updated_at' => '1554709417',
                ],
                [
                    'id' => '689',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'facebook',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '688',
                    'sort' => '0',
                    'created_at' => '1554709431',
                    'updated_at' => '1554709431',
                ],
                [
                    'id' => '690',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'app_id',
                    'value' => '440598006382886',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '689',
                    'sort' => '0',
                    'created_at' => '1554709449',
                    'updated_at' => '1554709449',
                ],
                [
                    'id' => '691',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'addthis',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '688',
                    'sort' => '-100',
                    'created_at' => '1554710588',
                    'updated_at' => '1554710588',
                ],
                [
                    'id' => '692',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'pubid',
                    'value' => 'ra-5ab0c5361efd854c',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '691',
                    'sort' => '0',
                    'created_at' => '1554710600',
                    'updated_at' => '1554710651',
                ],
                [
                    'id' => '708',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'options',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '13700',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '709',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'class',
                    'value' => 'navbar-nav navbar-left hidden-xs',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '708',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '710',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'id',
                    'value' => 'header_top_social',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '708',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '711',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'networks',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '13800',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '712',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'facebook',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '711',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '713',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'url',
                    'value' => 'https://www.facebook.com/sahara.cms/',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '712',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554813759',
                ],
                [
                    'id' => '714',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-facebook-official',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '712',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '715',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'instagram',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '711',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '716',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'url',
                    'value' => '#',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '715',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '717',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-instagram',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '715',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '718',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'twitter',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '711',
                    'sort' => '-200',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '719',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'url',
                    'value' => '#',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '718',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '720',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-twitter-square',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '718',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '721',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'youtube',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '711',
                    'sort' => '-300',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '722',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'url',
                    'value' => '#',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '721',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '723',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-youtube-square',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '721',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '724',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'skype',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '711',
                    'sort' => '-400',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '725',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'url',
                    'value' => '#',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '724',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '726',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-skype',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '724',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '727',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'icons',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '13900',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '728',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'facebook',
                    'value' => 'fa fa-facebook-official',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '727',
                    'sort' => '0',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '729',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'instagram',
                    'value' => 'fa fa-instagram',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '727',
                    'sort' => '-100',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '730',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'youtube',
                    'value' => 'fa fa-youtube-square',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '727',
                    'sort' => '-200',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '731',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'twitter',
                    'value' => 'fa fa-twitter-square',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '727',
                    'sort' => '-300',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '732',
                    'module_id' => '40',
                    'app_id' => null,
                    'name' => 'skype',
                    'value' => 'fa fa-skype',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '727',
                    'sort' => '-400',
                    'created_at' => '1554725071',
                    'updated_at' => '1554725071',
                ],
                [
                    'id' => '752',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'options',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14000',
                    'created_at' => '1554726517',
                    'updated_at' => '1554726517',
                ],
                [
                    'id' => '753',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'info',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14100',
                    'created_at' => '1554726517',
                    'updated_at' => '1554726517',
                ],
                [
                    'id' => '754',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'Mobile',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '753',
                    'sort' => '0',
                    'created_at' => '1554726517',
                    'updated_at' => '1554726517',
                ],
                [
                    'id' => '755',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-mobile',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '754',
                    'sort' => '0',
                    'created_at' => '1554726517',
                    'updated_at' => '1554726517',
                ],
                [
                    'id' => '756',
                    'module_id' => '42',
                    'app_id' => '',
                    'name' => 'value',
                    'value' => '+374 (93) 022-045',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '754',
                    'sort' => '-100',
                    'created_at' => '1554726517',
                    'updated_at' => '1554728193',
                ],
                [
                    'id' => '757',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'Telephone',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '753',
                    'sort' => '-100',
                    'created_at' => '1554726517',
                    'updated_at' => '1554726517',
                ],
                [
                    'id' => '758',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa  fa-phone-square',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '757',
                    'sort' => '0',
                    'created_at' => '1554726518',
                    'updated_at' => '1554726518',
                ],
                [
                    'id' => '759',
                    'module_id' => '42',
                    'app_id' => '',
                    'name' => 'value',
                    'value' => '+374 (43) 022-055',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '757',
                    'sort' => '-100',
                    'created_at' => '1554726518',
                    'updated_at' => '1554728083',
                ],
                [
                    'id' => '760',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'Address',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '753',
                    'sort' => '-200',
                    'created_at' => '1554726518',
                    'updated_at' => '1554726518',
                ],
                [
                    'id' => '761',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-map-marker',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '760',
                    'sort' => '0',
                    'created_at' => '1554726518',
                    'updated_at' => '1554726518',
                ],
                [
                    'id' => '762',
                    'module_id' => '42',
                    'app_id' => '',
                    'name' => 'value',
                    'value' => 'ք.Երևան, ՀԱԹ, Բ-2, 89/45',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '760',
                    'sort' => '-100',
                    'created_at' => '1554726518',
                    'updated_at' => '1554727991',
                ],
                [
                    'id' => '763',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'City',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '753',
                    'sort' => '-300',
                    'created_at' => '1554726518',
                    'updated_at' => '1554726518',
                ],
                [
                    'id' => '764',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-map-o',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '763',
                    'sort' => '0',
                    'created_at' => '1554726518',
                    'updated_at' => '1554726518',
                ],
                [
                    'id' => '765',
                    'module_id' => '42',
                    'app_id' => '',
                    'name' => 'value',
                    'value' => 'Երևան',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '763',
                    'sort' => '-100',
                    'created_at' => '1554726518',
                    'updated_at' => '1554728145',
                ],
                [
                    'id' => '766',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'Country',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '753',
                    'sort' => '-400',
                    'created_at' => '1554726518',
                    'updated_at' => '1554726518',
                ],
                [
                    'id' => '767',
                    'module_id' => '42',
                    'app_id' => null,
                    'name' => 'icon',
                    'value' => 'fa fa-map-o',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '766',
                    'sort' => '0',
                    'created_at' => '1554726518',
                    'updated_at' => '1554726518',
                ],
                [
                    'id' => '768',
                    'module_id' => '42',
                    'app_id' => '',
                    'name' => 'value',
                    'value' => 'Հայաստան',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '766',
                    'sort' => '-100',
                    'created_at' => '1554726518',
                    'updated_at' => '1554728019',
                ],
                [
                    'id' => '769',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'name',
                    'value' => 'sahara_cms',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14200',
                    'created_at' => '1554802015',
                    'updated_at' => '1554802042',
                ],
                [
                    'id' => '770',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'description',
                    'value' => 'sahara_cms basic and fast cms based on yii2 framework.',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14300',
                    'created_at' => '1554802015',
                    'updated_at' => '1554802073',
                ],
                [
                    'id' => '771',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'logo',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14400',
                    'created_at' => '1554802015',
                    'updated_at' => '1554802101',
                ],
                [
                    'id' => '772',
                    'module_id' => '43',
                    'app_id' => null,
                    'name' => 'data',
                    'value' => null,
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14500',
                    'created_at' => '1554802015',
                    'updated_at' => '1554802015',
                ],
                [
                    'id' => '773',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'md',
                    'value' => '/uploads/img/logo/sahara.png',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '771',
                    'sort' => '0',
                    'created_at' => '1554802130',
                    'updated_at' => '1559974155',
                ],
                [
                    'id' => '774',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'xs',
                    'value' => '/uploads/img/logo/sahara.png',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '771',
                    'sort' => '-100',
                    'created_at' => '1554802201',
                    'updated_at' => '1559974193',
                ],
                [
                    'id' => '775',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'footer',
                    'value' => '/uploads/img/logo/sahara_white.png',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '771',
                    'sort' => '-200',
                    'created_at' => '1554803133',
                    'updated_at' => '1554803133',
                ],
                [
                    'id' => '776',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'powered',
                    'value' => 'Aaron Yordanyan',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '772',
                    'sort' => '0',
                    'created_at' => '1554803395',
                    'updated_at' => '1554803395',
                ],
                [
                    'id' => '777',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'footer_description',
                    'value' => 'Հայկական լրատվության անկողմնակալ հարթակ։ Քաղաքական և անցուդարձային լուրեր, վերլուծություններ և մեկնաբանություններ․',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '772',
                    'sort' => '-100',
                    'created_at' => '1554803464',
                    'updated_at' => '1554803464',
                ],
                [
                    'id' => '778',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'appId',
                    'value' => '2092223964326783',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '712',
                    'sort' => '-200',
                    'created_at' => '1554813552',
                    'updated_at' => '1554814153',
                ],
                [
                    'id' => '779',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'page_plugin_options',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '712',
                    'sort' => '-300',
                    'created_at' => '1554813582',
                    'updated_at' => '1554813582',
                ],
                [
                    'id' => '780',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'language',
                    'value' => 'hy_AM',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '779',
                    'sort' => '0',
                    'created_at' => '1554813597',
                    'updated_at' => '1554813597',
                ],
                [
                    'id' => '781',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'data',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '779',
                    'sort' => '-100',
                    'created_at' => '1554813619',
                    'updated_at' => '1554813619',
                ],
                [
                    'id' => '782',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'small-header',
                    'value' => 'false',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '781',
                    'sort' => '0',
                    'created_at' => '1554813632',
                    'updated_at' => '1554813707',
                ],
                [
                    'id' => '783',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'adapt-container-width',
                    'value' => 'true',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '781',
                    'sort' => '-100',
                    'created_at' => '1554813654',
                    'updated_at' => '1554813654',
                ],
                [
                    'id' => '784',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'hide-cover',
                    'value' => 'false',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '781',
                    'sort' => '-200',
                    'created_at' => '1554813671',
                    'updated_at' => '1554813671',
                ],
                [
                    'id' => '785',
                    'module_id' => '40',
                    'app_id' => '',
                    'name' => 'show-facepile',
                    'value' => 'true',
                    'is_object' => '0',
                    'type_id' => null,
                    'parent_id' => '781',
                    'sort' => '-300',
                    'created_at' => '1554813694',
                    'updated_at' => '1554813694',
                ],
                [
                    'id' => '786',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'ads',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '772',
                    'sort' => '-200',
                    'created_at' => '1554828051',
                    'updated_at' => '1554828051',
                ],
                [
                    'id' => '787',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'frontendLayoutPatterns',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14600',
                    'created_at' => '1558772107',
                    'updated_at' => '1558772107',
                ],
                [
                    'id' => '788',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'blog/default/index',
                    'value' => '[```return Yii::$app->website->template->topNavigationBar;```]
[```return Yii::$app->website->template->brandingBar;```]
[```return diazoxide\\blog\\widgets\\Navigation::widget([ \'options\' => [ \'id\' => \'header_second\' ] ]);```]
<div class="container">[$content]</div>
<footer class="footer">
    <div class="container">
        <div class="col-md-3">
            <div id="fb_like_box">
                <h4>Facebook</h4>
                [```return Yii::$app->socialmedia->getFacebookPagePlugin();```]
            </div>
        </div>
        <div class="col-md-3 hidden-xs">
            <h4>Categories</h4>
            [```return diazoxide\\blog\\widgets\\Navigation::widget([ \'vertical\' => true, \'options\' => [ \'id\' => \'footer_categories\' ] ]);```]
        </div>
        <div class="col-md-3">
            [```return Yii::$app->contactInfo->getWidget();```]
        </div>
        <div class="col-md-3">
            [```return \\yii\\helpers\\Html::img(Yii::$app->website->getLogo(\'footer\'));```]
            <p class="top-buffer-20">[```return Yii::$app->website->getData(\'footer_description\');```]</p>
        </div>
    </div>
    <div class="container">
        <p class="pull-left">&copy; [```return Yii::$app->website->name.\' \'. date(\'Y\');```]</p>
        <p class="pull-right">Powered By [```return Yii::$app->website->getData(\'powered\');```]</p>
    </div>
</footer>',
                    'is_object' => '0',
                    'type_id' => '7',
                    'parent_id' => '787',
                    'sort' => '0',
                    'created_at' => '1558772140',
                    'updated_at' => '1558903000',
                ],
                [
                    'id' => '789',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'blog/default/view',
                    'value' => '[```return Yii::$app->website->template->topNavigationBar;```]
[```return Yii::$app->website->template->brandingBar;```]
[```return diazoxide\\blog\\widgets\\Navigation::widget([ \'options\' => [ \'id\' => \'header_second\' ] ]);```]
<div class="container">
    [```return yii\\widgets\\Breadcrumbs::widget([\'links\' => isset(Yii::$app->view->params[\'breadcrumbs\']) ? Yii::$app->view->params[\'breadcrumbs\'] : [],]);```]
    [$content]
</div>
<footer class="footer">
    <div class="container">
        <div class="col-md-3">
            <div id="fb_like_box">
                <h4>Facebook</h4>
                [```return Yii::$app->socialmedia->getFacebookPagePlugin();```]
            </div>
        </div>
        <div class="col-md-3 hidden-xs">
            <h4>Categories</h4>
            [```return diazoxide\\blog\\widgets\\Navigation::widget([ \'vertical\' => true, \'options\' => [ \'id\' => \'footer_categories\' ] ]);```]
        </div>
        <div class="col-md-3">
            [```return Yii::$app->contactInfo->getWidget();```]
        </div>
        <div class="col-md-3">
            [```return \\yii\\helpers\\Html::img(Yii::$app->website->getLogo(\'footer\'));```]
            <p class="top-buffer-20">[```return Yii::$app->website->getData(\'footer_description\');```]</p>
        </div>
    </div>
    <div class="container">
        <p class="pull-left">&copy; [```return Yii::$app->website->name.\' \'. date(\'Y\');```]</p>
        <p class="pull-right">Powered By [```return Yii::$app->website->getData(\'powered\');```]</p>
    </div>
</footer>',
                    'is_object' => '0',
                    'type_id' => '7',
                    'parent_id' => '787',
                    'sort' => '-100',
                    'created_at' => '1558772650',
                    'updated_at' => '1558903017',
                ],
                [
                    'id' => '790',
                    'module_id' => '43',
                    'app_id' => '',
                    'name' => 'custom_css',
                    'value' => '/* sahara_cms - Custom Css :) */ 

html, 
body { 
    height: 100%; 
    background: #eee; 
    font-family: "GHEAGrapalat", serif; 
} 

@media (min-width: 1500px) { 
    .container { 
        width: 1400px; 
    } 
} 

::-webkit-scrollbar { 
    width: 8px; 
} 

::-webkit-scrollbar-track { 
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px; 
    visibility: hidden; 
} 

::-webkit-scrollbar-thumb { 
    background: #0000002b; 
    border-radius: 2px; 
} 

::-webkit-scrollbar-thumb:hover { 
    background: #2b5aa8; 
} 

a { 
    color: #00173c; 
} 

a:hover { 
    color: #333; 
} 

.wrap { 
    min-height: 100%; 
    height: auto; 
    margin: 0 auto; 
} 

.wrap > .container { 
    padding: 10px 15px 20px; 
} 

.footer { 
    background-color: #2d2d2d; 
    margin-top: 40px; 
    font-size: 13px; 
    border-top: solid 5px#5f5f5f; 
    color: #ababab; 
} 

.footer .container { 
    padding-bottom: 50px; 
    padding-top: 20px; 
    border-bottom: solid 1px #555; 

} 

.footer h4 { 
    margin-bottom: 30px; 
} 

.footer a { 
    color: #828282 
} 

.jumbotron { 
    text-align: center; 
    background-color: transparent; 
} 

.jumbotron .btn { 
    font-size: 21px; 
    padding: 14px 24px; 
} 

.not-set { 
    color: #c55; 
    font-style: italic; 
} 

/* add sorting icons to gridview sort links */ 
a.asc:after, a.desc:after { 
    position: relative; 
    top: 1px; 
    display: inline-block; 
    font-family: \'Glyphicons Halflings\', serif; 
    font-style: normal; 
    font-weight: normal; 
    line-height: 1; 
    padding-left: 5px; 
} 

a.asc:after { 
    content: /*"\\e113"*/ "\\e151"; 
} 

a.desc:after { 
    content: /*"\\e114"*/ "\\e152"; 
} 

.sort-numerical a.asc:after { 
    content: "\\e153"; 
} 

.sort-numerical a.desc:after { 
    content: "\\e154"; 
} 

.sort-ordinal a.asc:after { 
    content: "\\e155"; 
} 

.sort-ordinal a.desc:after { 
    content: "\\e156"; 
} 

.grid-view th { 
    white-space: nowrap; 
} 

.hint-block { 
    display: block; 
    margin-top: 5px; 
    color: #999; 
} 

.error-summary { 
    color: #2b5aa8; 
    background: #fdf7f7; 
    border-left: 3px solid #eed3d7; 
    padding: 10px 20px; 
    margin: 0 0 15px 0; 
} 

/* align the logout "link" (button in form) of the navbar */ 
.nav li > form > button.logout { 
    padding: 15px; 
    border: none; 
} 

@media (max-width: 767px) { 
    .nav li > form > button.logout { 
        display: block; 
        text-align: left; 
        width: 100%; 
        padding: 10px 15px; 
    } 
} 

.nav > li > form > button.logout:focus, 
.nav > li > form > button.logout:hover { 
    text-decoration: none; 
} 

.nav > li > form > button.logout:focus { 
    outline: none; 
} 

.nopadding { 
    padding: 0 !important; 
} 

.nomargin { 
    margin: 0 !important; 
} 

.nospaces { 
    margin: 0 !important; 
    padding: 0 !important; 
} 

.widget_title a { 
    color: #c7a871; 
} 

.widget_title a:hover { 
    color: #87704a; 
} 

.widget_title { 
    background: #ffecca; 
    color: #616161; 
    padding: 10px; 
    font-size: 17px; 
    text-align: center; 
    overflow: hidden; 
} 

#header_second { 
    background: #009ada; 
    box-shadow:0px 10px 10px #c7c7c7 
} 
#header_second a { 
    color:#fff 
} 
#header_second .navbar-toggle .icon-bar{ 
    background-color:#fff; 
} 
#header_second li li a{
    color:#3a3a3a;
}

#logo { 
    display: inline-block; 
    padding: 15px 0; 
} 

.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
    background: #2b5aa8; 
    border-color: #fff; 
} 

.pagination > li > a, .pagination > li > span { 
    color: #444; 
} 

.navbar-default { 
    border: none; 
    border-radius: 0; 
} 

/*Blog*/ 
#blog-article-single-container .body img, 
#blog-article-single-container .body iframe { 
    max-width: 100%; 
}',
                    'is_object' => '0',
                    'type_id' => '5',
                    'parent_id' => '772',
                    'sort' => '-300',
                    'created_at' => '1558773385',
                    'updated_at' => '1560698728',
                ],
                [
                    'id' => '791',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'blog/default/archive',
                    'value' => '[```return Yii::$app->website->template->topNavigationBar;```]
[```return Yii::$app->website->template->brandingBar;```]
[```return diazoxide\\blog\\widgets\\Navigation::widget([ \'options\' => [ \'id\' => \'header_second\' ] ]);```]
<div class="container">
    [$content]
</div>
<footer class="footer">
    <div class="container">
        <div class="col-md-3">
            <div id="fb_like_box">
                <h4>Facebook</h4>
                [```return Yii::$app->socialmedia->getFacebookPagePlugin();```]
            </div>
        </div>
        <div class="col-md-3 hidden-xs">
            <h4>Categories</h4>
            [```return diazoxide\\blog\\widgets\\Navigation::widget([ \'vertical\' => true, \'options\' => [ \'id\' => \'footer_categories\' ] ]);```]
        </div>
        <div class="col-md-3">
            [```return Yii::$app->contactInfo->getWidget();```]
        </div>
        <div class="col-md-3">
            [```return \\yii\\helpers\\Html::img(Yii::$app->website->getLogo(\'footer\'));```]
            <p class="top-buffer-20">[```return Yii::$app->website->getData(\'footer_description\');```]</p>
        </div>
    </div>
    <div class="container">
        <p class="pull-left">&copy; [```return Yii::$app->website->name.\' \'. date(\'Y\');```]</p>
        <p class="pull-right">Powered By [```return Yii::$app->website->getData(\'powered\');```]</p>
    </div>
</footer>',
                    'is_object' => '0',
                    'type_id' => '7',
                    'parent_id' => '787',
                    'sort' => '-200',
                    'created_at' => '1558773720',
                    'updated_at' => '1558900735',
                ],
                [
                    'id' => '792',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'default',
                    'value' => '[```return Yii::$app->website->template->topNavigationBar;```]
[```return Yii::$app->website->template->brandingBar;```]
[```return diazoxide\\blog\\widgets\\Navigation::widget([ \'options\' => [ \'id\' => \'header_second\' ] ]);```]
<div class="container">
    [```return yii\\widgets\\Breadcrumbs::widget([\'links\' => isset(Yii::$app->view->params[\'breadcrumbs\']) ? Yii::$app->view->params[\'breadcrumbs\'] : [],]);```]
    [$content]
</div>
<footer class="footer">
    <div class="container">
        <div class="col-md-3">
            <div id="fb_like_box">
                <h4>Facebook</h4>
                [```return Yii::$app->socialmedia->getFacebookPagePlugin();```]
            </div>
        </div>
        <div class="col-md-3 hidden-xs">
            <h4>Categories</h4>
            [```return diazoxide\\blog\\widgets\\Navigation::widget([ \'vertical\' => true, \'options\' => [ \'id\' => \'footer_categories\' ] ]);```]
        </div>
        <div class="col-md-3">
            [```return Yii::$app->contactInfo->getWidget();```]
        </div>
        <div class="col-md-3">
            [```return \\yii\\helpers\\Html::img(Yii::$app->website->getLogo(\'footer\'));```]
            <p class="top-buffer-20">[```return Yii::$app->website->getData(\'footer_description\');```]</p>
        </div>
    </div>
    <div class="container">
        <p class="pull-left">&copy; [```return Yii::$app->website->name.\' \'. date(\'Y\');```]</p>
        <p class="pull-right">Powered By [```return Yii::$app->website->getData(\'powered\');```]</p>
    </div>
</footer>',
                    'is_object' => '0',
                    'type_id' => '7',
                    'parent_id' => '787',
                    'sort' => '-300',
                    'created_at' => '1558903044',
                    'updated_at' => '1558903051',
                ],
                [
                    'id' => '793',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'thumbnailsSizes',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14700',
                    'created_at' => '1560618200',
                    'updated_at' => '1560618200',
                ],
                [
                    'id' => '794',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'xsthumb',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '793',
                    'sort' => '0',
                    'created_at' => '1560618221',
                    'updated_at' => '1560618221',
                ],
                [
                    'id' => '795',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'width',
                    'value' => '64',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '794',
                    'sort' => '0',
                    'created_at' => '1560696289',
                    'updated_at' => '1560696289',
                ],
                [
                    'id' => '796',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'height',
                    'value' => '48',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '794',
                    'sort' => '-100',
                    'created_at' => '1560696312',
                    'updated_at' => '1560696312',
                ],
                [
                    'id' => '797',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'sthumb',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '793',
                    'sort' => '-100',
                    'created_at' => '1560696333',
                    'updated_at' => '1560696333',
                ],
                [
                    'id' => '798',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'width',
                    'value' => '128',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '797',
                    'sort' => '0',
                    'created_at' => '1560696359',
                    'updated_at' => '1560696359',
                ],
                [
                    'id' => '799',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'height',
                    'value' => '86',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '797',
                    'sort' => '-100',
                    'created_at' => '1560696385',
                    'updated_at' => '1560696390',
                ],
                [
                    'id' => '800',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'mthumb',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '793',
                    'sort' => '-200',
                    'created_at' => '1560696425',
                    'updated_at' => '1560696425',
                ],
                [
                    'id' => '801',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'width',
                    'value' => '240',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '800',
                    'sort' => '0',
                    'created_at' => '1560696439',
                    'updated_at' => '1560696439',
                ],
                [
                    'id' => '802',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'height',
                    'value' => '200',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '800',
                    'sort' => '-100',
                    'created_at' => '1560696502',
                    'updated_at' => '1560696502',
                ],
                [
                    'id' => '803',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'nthumb',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '793',
                    'sort' => '-300',
                    'created_at' => '1560696534',
                    'updated_at' => '1560696534',
                ],
                [
                    'id' => '804',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'width',
                    'value' => '320',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '803',
                    'sort' => '0',
                    'created_at' => '1560696547',
                    'updated_at' => '1560696547',
                ],
                [
                    'id' => '805',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'height',
                    'value' => '240',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '803',
                    'sort' => '-100',
                    'created_at' => '1560696576',
                    'updated_at' => '1560696579',
                ],
                [
                    'id' => '806',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'xthumb',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '793',
                    'sort' => '-400',
                    'created_at' => '1560696611',
                    'updated_at' => '1560696611',
                ],
                [
                    'id' => '807',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'width',
                    'value' => '480',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '806',
                    'sort' => '0',
                    'created_at' => '1560696653',
                    'updated_at' => '1560696653',
                ],
                [
                    'id' => '808',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'height',
                    'value' => '320',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '806',
                    'sort' => '-100',
                    'created_at' => '1560696675',
                    'updated_at' => '1560696675',
                ],
                [
                    'id' => '809',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'thumb',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '793',
                    'sort' => '-500',
                    'created_at' => '1560696703',
                    'updated_at' => '1560696703',
                ],
                [
                    'id' => '810',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'width',
                    'value' => '320',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '809',
                    'sort' => '0',
                    'created_at' => '1560696742',
                    'updated_at' => '1560696742',
                ],
                [
                    'id' => '811',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'height',
                    'value' => '240',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '809',
                    'sort' => '-100',
                    'created_at' => '1560696758',
                    'updated_at' => '1560697479',
                ],
                [
                    'id' => '812',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'facebook',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => '793',
                    'sort' => '-600',
                    'created_at' => '1560696780',
                    'updated_at' => '1560696780',
                ],
                [
                    'id' => '813',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'width',
                    'value' => '600',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '812',
                    'sort' => '0',
                    'created_at' => '1560696802',
                    'updated_at' => '1560696802',
                ],
                [
                    'id' => '814',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'height',
                    'value' => '315',
                    'is_object' => '0',
                    'type_id' => '2',
                    'parent_id' => '812',
                    'sort' => '-100',
                    'created_at' => '1560696821',
                    'updated_at' => '1560696821',
                ],
                [
                    'id' => '815',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => 'assets',
                    'value' => '',
                    'is_object' => '1',
                    'type_id' => null,
                    'parent_id' => null,
                    'sort' => '14800',
                    'created_at' => '1561190002',
                    'updated_at' => '1561190002',
                ],
                [
                    'id' => '816',
                    'module_id' => '26',
                    'app_id' => '',
                    'name' => '0',
                    'value' => 'app\\assets\\FontsAsset',
                    'is_object' => '0',
                    'type_id' => '1',
                    'parent_id' => '815',
                    'sort' => '0',
                    'created_at' => '1561190067',
                    'updated_at' => '1561190071',
                ],
            ]
        );

    }

    public function safeDown()
    {
        //$this->truncateTable('{{%config_modules_options}} CASCADE');
    }
}
