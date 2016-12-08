<?php

use yii\db\Migration;

/**
 * Handles the creation for table `house_level`.
 */
class m161208_092014_create_house_level_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%house_level}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'cost_to_next' => $this->integer(),
            'time_to_next' => $this->integer(),
            'current_picture' => $this->string(255),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('IF EXISTS {{%house_level}}');
    }
}
