<?php

use yii\db\Migration;

class m140712_123329_widget_carousel extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%widget_carousel}}', [
            'id'     => $this->primaryKey(),
            'key'    => $this->string()->notNull(),
            'status' => $this->smallInteger()->defaultValue(0)
        ]);

        $this->createTable('{{%widget_carousel_item}}', [
            'id'          => $this->primaryKey(),
            'carousel_id' => $this->integer()->notNull(),
            'base_url'    => $this->string(128),
            'path'        => $this->string(255),
            'type'        => $this->string(),
            'url'         => $this->string(255),
            'caption'     => $this->string(255),
            'status'      => $this->smallInteger()->notNull()->defaultValue(0),
            'order'       => $this->integer()->defaultValue(0),
            'created_at'  => $this->integer(),
            'updated_at'  => $this->integer(),
        ]);

        $this->addForeignKey('fk_item_carousel', '{{%widget_carousel_item}}', 'carousel_id', '{{%widget_carousel}}', 'id', 'cascade', 'cascade');

    }


    public function safeDown()
    {
        $this->dropForeignKey('fk_item_carousel', '{{%widget_carousel_item}}');
        $this->dropTable('{{%widget_carousel_item}}');
        $this->dropTable('{{%widget_carousel}}');
    }
}
