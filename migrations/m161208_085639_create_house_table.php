<?php

use yii\db\Migration;

/**
 * Handles the creation for table `house`.
 */
class m161208_085639_create_house_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%house}}', [
            'id' => $this->primaryKey(),
            'current_level_id' => $this->integer(),
            'current_picture_id' => $this->integer(),
            'user_id' => $this->integer(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%house}}');
    }
}
