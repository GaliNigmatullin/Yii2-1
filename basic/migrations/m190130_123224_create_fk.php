<?php

use yii\db\Migration;

/**
 * Class m190130_123224_create_fk
 */
class m190130_123224_create_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fx_taskuser_user', 'task_user', ['user_id'], 'user', ['id']);
        $this->addForeignKey('fx_taskuser_task', 'task_user', ['task_id'], 'task', ['id']);
        $this->addForeignKey('fx_task_user1', 'task', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_user2', 'task', ['updater_id'], 'user', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_taskuser_user', 'task_user', ['user_id'], 'user', ['id']);
        $this->dropForeignKey('fx_taskuser_task', 'task_user', ['task_id'], 'task', ['id']);
        $this->dropForeignKey('fx_task_user1', 'task', ['creator_id'], 'user', ['id']);
        $this->dropForeignKey('fx_task_user2', 'task', ['updater_id'], 'user', ['id']);

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190130_123224_create_fk cannot be reverted.\n";

        return false;
    }
    */
}
