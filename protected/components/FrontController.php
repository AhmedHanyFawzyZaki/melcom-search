<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class FrontController extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/main';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function init() {
        $parameters = Settings::model()->findByPk(1);
        Yii::app()->params['email'] = $parameters->email;
        Yii::app()->params['phone'] = $parameters->phone;
        Yii::app()->params['twitter'] = $parameters->twitter;
        Yii::app()->params['facebook'] = $parameters->facebook;
        Yii::app()->params['linkedin'] = $parameters->linkedin;
        Yii::app()->params['address'] = $parameters->address;
        Yii::app()->params['footer'] = $parameters->footer;
    }

    /* public function actions() {
      return array(
      'captcha' => array(
      'class' => 'CCaptchaAction',
      'backColor' => 0xFFFFFF,
      ),
      'page' => array(
      'class' => 'CViewAction',
      ),
      'yiichat' => array('class' => 'YiiChatAction'), // <- ADD THIS LINE
      );
      }

      protected function afterRender($view, &$output) {
      parent::afterRender($view, $output);
      //Yii::app()->facebook->addJsCallback($js); // use this if you are registering any $js code you want to run asyc
      Yii::app()->facebook->initJs($output); // this initializes the Facebook JS SDK on all pages
      Yii::app()->facebook->renderOGMetaTags(); // this renders the OG tags
      return true;
      } */
}
