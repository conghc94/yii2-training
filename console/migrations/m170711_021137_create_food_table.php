<?php

use yii\db\Migration;

/**
 * Handles the creation of table `food`.
 */
class m170711_021137_create_food_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('food', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'detail' => $this->text()->notNull(),
            'image' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
            'deleted_at' => $this->boolean()->defaultValue(false),
        ]);

        /*add foreign key for table 'food'*/
        $this->addForeignKey(
            'fk-food-catefory_id',
            'food',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        /*drops foreign key for table 'category'*/
        $this->dropForeignKey(
            'fk-food-category_id',
            'food'
        );

        $this->dropTable('food');
    }
}
