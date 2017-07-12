<?php

use yii\db\Migration;

/**
 * Handles adding avatar to table `user`.
 */
class m170712_075734_add_avatar_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'avatar', $this->string()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'avatar');
    }
}
