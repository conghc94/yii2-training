<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categories`.
 */
class m170711_013547_create_category_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'create_at' => $this->timestamp()->notNull(),
            'update_at' => $this->timestamp()->notNull(),
            'deleted_at' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('category');
    }

}
