<?php


/**
 * Class m000000_000000_c006_states
 */
class m000000_000000_c006_states extends \yii\db\Migration
{


    /**
     *
     */
    public function up()
    {

        self::down();

        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";


        $this->execute('SET foreign_key_checks = 0');

        $this->insert('{{%common_state}}',['id'=>'1','country_id'=>'223','data'=>'Alabama','char2'=>'AL','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'2','country_id'=>'223','data'=>'Alaska','char2'=>'AK','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'3','country_id'=>'223','data'=>'Arizona','char2'=>'AZ','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'4','country_id'=>'223','data'=>'Arkansas','char2'=>'AR','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'5','country_id'=>'223','data'=>'California','char2'=>'CA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'6','country_id'=>'223','data'=>'Colorado','char2'=>'CO','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'7','country_id'=>'223','data'=>'Connecticut','char2'=>'CT','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'8','country_id'=>'223','data'=>'Delaware','char2'=>'DE','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'9','country_id'=>'223','data'=>'Florida','char2'=>'FL','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'10','country_id'=>'223','data'=>'Georgia','char2'=>'GA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'11','country_id'=>'223','data'=>'Hawaii','char2'=>'HI','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'12','country_id'=>'223','data'=>'Idaho','char2'=>'ID','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'13','country_id'=>'223','data'=>'Illinois','char2'=>'IL','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'14','country_id'=>'223','data'=>'Indiana','char2'=>'IN','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'15','country_id'=>'223','data'=>'Iowa','char2'=>'IA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'16','country_id'=>'223','data'=>'Kansas','char2'=>'KS','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'17','country_id'=>'223','data'=>'Kentucky','char2'=>'KY','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'18','country_id'=>'223','data'=>'Louisiana','char2'=>'LA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'19','country_id'=>'223','data'=>'Maine','char2'=>'ME','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'20','country_id'=>'223','data'=>'Maryland','char2'=>'MD','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'21','country_id'=>'223','data'=>'Massachusetts','char2'=>'MA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'22','country_id'=>'223','data'=>'Michigan','char2'=>'MI','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'23','country_id'=>'223','data'=>'Minnesota','char2'=>'MN','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'24','country_id'=>'223','data'=>'Mississippi','char2'=>'MS','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'25','country_id'=>'223','data'=>'Missouri','char2'=>'MO','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'26','country_id'=>'223','data'=>'Montana','char2'=>'MT','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'27','country_id'=>'223','data'=>'Nebraska','char2'=>'NE','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'28','country_id'=>'223','data'=>'Nevada','char2'=>'NV','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'29','country_id'=>'223','data'=>'New Hampshire','char2'=>'NH','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'30','country_id'=>'223','data'=>'New Jersey','char2'=>'NJ','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'31','country_id'=>'223','data'=>'New Mexico','char2'=>'NM','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'32','country_id'=>'223','data'=>'New York','char2'=>'NY','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'33','country_id'=>'223','data'=>'North Carolina','char2'=>'NC','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'34','country_id'=>'223','data'=>'North Dakota','char2'=>'ND','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'35','country_id'=>'223','data'=>'Ohio','char2'=>'OH','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'36','country_id'=>'223','data'=>'Oklahoma','char2'=>'OK','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'37','country_id'=>'223','data'=>'Oregon','char2'=>'OR','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'38','country_id'=>'223','data'=>'Pennsylvania','char2'=>'PA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'39','country_id'=>'223','data'=>'Rhode Island','char2'=>'RI','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'40','country_id'=>'223','data'=>'South Carolina','char2'=>'SC','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'41','country_id'=>'223','data'=>'South Dakota','char2'=>'SD','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'42','country_id'=>'223','data'=>'Tennessee','char2'=>'TN','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'43','country_id'=>'223','data'=>'Texas','char2'=>'TX','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'44','country_id'=>'223','data'=>'Utah','char2'=>'UT','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'45','country_id'=>'223','data'=>'Vermont','char2'=>'VT','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'46','country_id'=>'223','data'=>'Virginia','char2'=>'VA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'47','country_id'=>'223','data'=>'Washington','char2'=>'WA','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'48','country_id'=>'223','data'=>'West Virginia','char2'=>'WV','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'49','country_id'=>'223','data'=>'Wisconsin','char2'=>'WI','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'50','country_id'=>'223','data'=>'Wyoming','char2'=>'WY','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'51','country_id'=>'223','data'=>'Washington D.C.','char2'=>'DC','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'52','country_id'=>'224','data'=>'American Samoa','char2'=>'AS','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'53','country_id'=>'224','data'=>'Guam','char2'=>'GU','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'54','country_id'=>'224','data'=>'Northern Mariana Islands','char2'=>'MP','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'55','country_id'=>'224','data'=>'Puerto Rico','char2'=>'PR','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'56','country_id'=>'224','data'=>'Virgin Islands','char2'=>'VI','char3'=>'']);
        $this->insert('{{%common_state}}',['id'=>'57','country_id'=>'223','data'=>'Armed Forces Europe','char2'=>'AE','char3'=>'APO']);
        $this->insert('{{%common_state}}',['id'=>'58','country_id'=>'223','data'=>'Armed Forces Europe','char2'=>'AE','char3'=>'FPO']);
        $this->insert('{{%common_state}}',['id'=>'59','country_id'=>'223','data'=>'Armed Forces America','char2'=>'AA','char3'=>'APO']);
        $this->insert('{{%common_state}}',['id'=>'60','country_id'=>'223','data'=>'Armed Forces America','char2'=>'AA','char3'=>'FPO']);
        $this->insert('{{%common_state}}',['id'=>'61','country_id'=>'223','data'=>'Armed Forces Asia Pacific','char2'=>'AP','char3'=>'APO']);
        $this->insert('{{%common_state}}',['id'=>'62','country_id'=>'223','data'=>'Armed Forces Asia Pacific','char2'=>'AP','char3'=>'FPO']);
        $this->insert('{{%common_state}}',['id'=>'63','country_id'=>'163','data'=>'Palau','char2'=>'PW','char3'=>'']);

        $this->execute('SET foreign_key_checks = 1');


    }


    /**
     * @return bool
     */
    public function down()
    {

    }
}
