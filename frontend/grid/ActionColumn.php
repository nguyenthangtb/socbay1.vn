<?php
/**
 * Created by PhpStorm.
 * User: Adnet
 * Date: 1/4/2017
 * Time: 9:06 AM
 */

namespace frontend\grid;

use Yii;
use yii\helpers\Html;

class ActionColumn extends \yii\grid\ActionColumn
{
    /**
     * @var array
     */
    public $buttonClass = [
        'delete'      => 'danger',
        'delete-file' => 'danger',
        'view'        => 'success',
        'update'      => 'info',
        'copy'        => 'info',
        'item'        => 'info',
        'task'        => 'info',
        'search'      => 'info',
        'login'       => 'info'
    ];

    /**
     * Initializes the default button rendering callbacks.
     */
    protected function initDefaultButtons()
    {
        $this->initDefaultButton('view', 'eye');
        $this->initDefaultButton('update', 'pencil');
        $this->initDefaultButton('delete-file', 'trash', [
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            'data-method'  => 'post',
        ]);
        $this->initDefaultButton('delete', 'trash', [
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            'data-method'  => 'post',
        ]);
    }

    /**
     * @inheritdoc
     */
    protected function initDefaultButton($name, $iconName, $additionalOptions = [])
    {
        if (!isset($this->buttons[$name]) && strpos($this->template, '{' . $name . '}') !== false) {
            $this->buttons[$name] = function ($url, $model, $key) use ($name, $iconName, $additionalOptions) {
                $title = Yii::t('yii', ucfirst($name));
                $options = array_merge([
                    'title'      => $title,
                    'class'      => 'btn btn-sm btn-' . $this->buttonClass[$name],
                    'aria-label' => $title,
                    'data-pjax'  => '0',
                ], $additionalOptions, $this->buttonOptions);
                $icon = Html::tag('span', '', ['class' => "fa fa-$iconName"]);

                return Html::a($icon, $url, $options);
            };
        }
    }

}