<?php


/**
 * Class m000000_000000_c006_countries
 */
class m000000_000000_c006_countries extends \yii\db\Migration
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

        $this->insert('{{%common_country}}',['id'=>'1','data'=>'Afghanistan','char2'=>'AF','char3'=>'AFG']);
        $this->insert('{{%common_country}}',['id'=>'2','data'=>'Albania','char2'=>'AL','char3'=>'ALB']);
        $this->insert('{{%common_country}}',['id'=>'3','data'=>'Algeria','char2'=>'DZ','char3'=>'DZA']);
        $this->insert('{{%common_country}}',['id'=>'4','data'=>'American Samoa','char2'=>'AS','char3'=>'ASM']);
        $this->insert('{{%common_country}}',['id'=>'5','data'=>'Andorra','char2'=>'AD','char3'=>'AND']);
        $this->insert('{{%common_country}}',['id'=>'6','data'=>'Angola','char2'=>'AO','char3'=>'AGO']);
        $this->insert('{{%common_country}}',['id'=>'7','data'=>'Anguilla','char2'=>'AI','char3'=>'AIA']);
        $this->insert('{{%common_country}}',['id'=>'8','data'=>'Antarctica','char2'=>'AQ','char3'=>'ATA']);
        $this->insert('{{%common_country}}',['id'=>'9','data'=>'Antigua AND Barbuda','char2'=>'AG','char3'=>'ATG']);
        $this->insert('{{%common_country}}',['id'=>'10','data'=>'Argentina','char2'=>'AR','char3'=>'ARG']);
        $this->insert('{{%common_country}}',['id'=>'11','data'=>'Armenia','char2'=>'AM','char3'=>'ARM']);
        $this->insert('{{%common_country}}',['id'=>'12','data'=>'Aruba','char2'=>'AW','char3'=>'ABW']);
        $this->insert('{{%common_country}}',['id'=>'13','data'=>'Australia','char2'=>'AU','char3'=>'AUS']);
        $this->insert('{{%common_country}}',['id'=>'14','data'=>'Austria','char2'=>'AT','char3'=>'AUT']);
        $this->insert('{{%common_country}}',['id'=>'15','data'=>'Azerbaijan','char2'=>'AZ','char3'=>'AZE']);
        $this->insert('{{%common_country}}',['id'=>'16','data'=>'Bahamas','char2'=>'BS','char3'=>'BHS']);
        $this->insert('{{%common_country}}',['id'=>'17','data'=>'Bahrain','char2'=>'BH','char3'=>'BHR']);
        $this->insert('{{%common_country}}',['id'=>'18','data'=>'Bangladesh','char2'=>'BD','char3'=>'BGD']);
        $this->insert('{{%common_country}}',['id'=>'19','data'=>'Barbados','char2'=>'BB','char3'=>'BRB']);
        $this->insert('{{%common_country}}',['id'=>'20','data'=>'Belarus','char2'=>'BY','char3'=>'BLR']);
        $this->insert('{{%common_country}}',['id'=>'21','data'=>'Belgium','char2'=>'BE','char3'=>'BEL']);
        $this->insert('{{%common_country}}',['id'=>'22','data'=>'Belize','char2'=>'BZ','char3'=>'BLZ']);
        $this->insert('{{%common_country}}',['id'=>'23','data'=>'Benin','char2'=>'BJ','char3'=>'BEN']);
        $this->insert('{{%common_country}}',['id'=>'24','data'=>'Bermuda','char2'=>'BM','char3'=>'BMU']);
        $this->insert('{{%common_country}}',['id'=>'25','data'=>'Bhutan','char2'=>'BT','char3'=>'BTN']);
        $this->insert('{{%common_country}}',['id'=>'26','data'=>'Bolivia','char2'=>'BO','char3'=>'BOL']);
        $this->insert('{{%common_country}}',['id'=>'27','data'=>'Bosnia AND Herzegowina','char2'=>'BA','char3'=>'BIH']);
        $this->insert('{{%common_country}}',['id'=>'28','data'=>'Botswana','char2'=>'BW','char3'=>'BWA']);
        $this->insert('{{%common_country}}',['id'=>'29','data'=>'Bouvet Island','char2'=>'BV','char3'=>'BVT']);
        $this->insert('{{%common_country}}',['id'=>'30','data'=>'Brazil','char2'=>'BR','char3'=>'BRA']);
        $this->insert('{{%common_country}}',['id'=>'31','data'=>'British Indian Ocean Territory','char2'=>'IO','char3'=>'IOT']);
        $this->insert('{{%common_country}}',['id'=>'32','data'=>'Brunei Darussalam','char2'=>'BN','char3'=>'BRN']);
        $this->insert('{{%common_country}}',['id'=>'33','data'=>'Bulgaria','char2'=>'BG','char3'=>'BGR']);
        $this->insert('{{%common_country}}',['id'=>'34','data'=>'Burkina Faso','char2'=>'BF','char3'=>'BFA']);
        $this->insert('{{%common_country}}',['id'=>'35','data'=>'Burundi','char2'=>'BI','char3'=>'BDI']);
        $this->insert('{{%common_country}}',['id'=>'36','data'=>'Cambodia','char2'=>'KH','char3'=>'KHM']);
        $this->insert('{{%common_country}}',['id'=>'37','data'=>'Cameroon','char2'=>'CM','char3'=>'CMR']);
        $this->insert('{{%common_country}}',['id'=>'38','data'=>'Canada','char2'=>'CA','char3'=>'CAN']);
        $this->insert('{{%common_country}}',['id'=>'39','data'=>'Cape Verde','char2'=>'CV','char3'=>'CPV']);
        $this->insert('{{%common_country}}',['id'=>'40','data'=>'Cayman Islands','char2'=>'KY','char3'=>'CYM']);
        $this->insert('{{%common_country}}',['id'=>'41','data'=>'Central African Republic','char2'=>'CF','char3'=>'CAF']);
        $this->insert('{{%common_country}}',['id'=>'42','data'=>'Chad','char2'=>'TD','char3'=>'TCD']);
        $this->insert('{{%common_country}}',['id'=>'43','data'=>'Chile','char2'=>'CL','char3'=>'CHL']);
        $this->insert('{{%common_country}}',['id'=>'44','data'=>'China','char2'=>'CN','char3'=>'CHN']);
        $this->insert('{{%common_country}}',['id'=>'45','data'=>'Christmas Island','char2'=>'CX','char3'=>'CXR']);
        $this->insert('{{%common_country}}',['id'=>'46','data'=>'Cocos (Keeling) Islands','char2'=>'CC','char3'=>'CCK']);
        $this->insert('{{%common_country}}',['id'=>'47','data'=>'Colombia','char2'=>'CO','char3'=>'COL']);
        $this->insert('{{%common_country}}',['id'=>'48','data'=>'Comoros','char2'=>'KM','char3'=>'COM']);
        $this->insert('{{%common_country}}',['id'=>'49','data'=>'Congo','char2'=>'CG','char3'=>'COG']);
        $this->insert('{{%common_country}}',['id'=>'50','data'=>'Cook Islands','char2'=>'CK','char3'=>'COK']);
        $this->insert('{{%common_country}}',['id'=>'51','data'=>'Costa Rica','char2'=>'CR','char3'=>'CRI']);
        $this->insert('{{%common_country}}',['id'=>'52','data'=>'Cote D\'Ivoire','char2'=>'CI','char3'=>'CIV']);
        $this->insert('{{%common_country}}',['id'=>'53','data'=>'Croatia','char2'=>'HR','char3'=>'HRV']);
        $this->insert('{{%common_country}}',['id'=>'54','data'=>'Cuba','char2'=>'CU','char3'=>'CUB']);
        $this->insert('{{%common_country}}',['id'=>'55','data'=>'Cyprus','char2'=>'CY','char3'=>'CYP']);
        $this->insert('{{%common_country}}',['id'=>'56','data'=>'Czech Republic','char2'=>'CZ','char3'=>'CZE']);
        $this->insert('{{%common_country}}',['id'=>'57','data'=>'Denmark','char2'=>'DK','char3'=>'DNK']);
        $this->insert('{{%common_country}}',['id'=>'58','data'=>'Djibouti','char2'=>'DJ','char3'=>'DJI']);
        $this->insert('{{%common_country}}',['id'=>'59','data'=>'Dominica','char2'=>'DM','char3'=>'DMA']);
        $this->insert('{{%common_country}}',['id'=>'60','data'=>'Dominican Republic','char2'=>'DO','char3'=>'DOM']);
        $this->insert('{{%common_country}}',['id'=>'61','data'=>'East Timor','char2'=>'TP','char3'=>'TMP']);
        $this->insert('{{%common_country}}',['id'=>'62','data'=>'Ecuador','char2'=>'EC','char3'=>'ECU']);
        $this->insert('{{%common_country}}',['id'=>'63','data'=>'Egypt','char2'=>'EG','char3'=>'EGY']);
        $this->insert('{{%common_country}}',['id'=>'64','data'=>'El Salvador','char2'=>'SV','char3'=>'SLV']);
        $this->insert('{{%common_country}}',['id'=>'65','data'=>'Equatorial Guinea','char2'=>'GQ','char3'=>'GNQ']);
        $this->insert('{{%common_country}}',['id'=>'66','data'=>'Eritrea','char2'=>'ER','char3'=>'ERI']);
        $this->insert('{{%common_country}}',['id'=>'67','data'=>'Estonia','char2'=>'EE','char3'=>'EST']);
        $this->insert('{{%common_country}}',['id'=>'68','data'=>'Ethiopia','char2'=>'ET','char3'=>'ETH']);
        $this->insert('{{%common_country}}',['id'=>'69','data'=>'Falkland Islands (Malvinas)','char2'=>'FK','char3'=>'FLK']);
        $this->insert('{{%common_country}}',['id'=>'70','data'=>'Faroe Islands','char2'=>'FO','char3'=>'FRO']);
        $this->insert('{{%common_country}}',['id'=>'71','data'=>'Fiji','char2'=>'FJ','char3'=>'FJI']);
        $this->insert('{{%common_country}}',['id'=>'72','data'=>'Finland','char2'=>'FI','char3'=>'FIN']);
        $this->insert('{{%common_country}}',['id'=>'73','data'=>'France','char2'=>'FR','char3'=>'FRA']);
        $this->insert('{{%common_country}}',['id'=>'74','data'=>'France, metropolitan','char2'=>'FX','char3'=>'FXX']);
        $this->insert('{{%common_country}}',['id'=>'75','data'=>'French Guiana','char2'=>'GF','char3'=>'GUF']);
        $this->insert('{{%common_country}}',['id'=>'76','data'=>'French Polynesia','char2'=>'PF','char3'=>'PYF']);
        $this->insert('{{%common_country}}',['id'=>'77','data'=>'French Southern Territories','char2'=>'TF','char3'=>'ATF']);
        $this->insert('{{%common_country}}',['id'=>'78','data'=>'Gabon','char2'=>'GA','char3'=>'GAB']);
        $this->insert('{{%common_country}}',['id'=>'79','data'=>'Gambia','char2'=>'GM','char3'=>'GMB']);
        $this->insert('{{%common_country}}',['id'=>'80','data'=>'Georgia','char2'=>'GE','char3'=>'GEO']);
        $this->insert('{{%common_country}}',['id'=>'81','data'=>'Germany','char2'=>'DE','char3'=>'DEU']);
        $this->insert('{{%common_country}}',['id'=>'82','data'=>'Ghana','char2'=>'GH','char3'=>'GHA']);
        $this->insert('{{%common_country}}',['id'=>'83','data'=>'Gibraltar','char2'=>'GI','char3'=>'GIB']);
        $this->insert('{{%common_country}}',['id'=>'84','data'=>'Greece','char2'=>'GR','char3'=>'GRC']);
        $this->insert('{{%common_country}}',['id'=>'85','data'=>'Greenland','char2'=>'GL','char3'=>'GRL']);
        $this->insert('{{%common_country}}',['id'=>'86','data'=>'Grenada','char2'=>'GD','char3'=>'GRD']);
        $this->insert('{{%common_country}}',['id'=>'87','data'=>'Guadeloupe','char2'=>'GP','char3'=>'GLP']);
        $this->insert('{{%common_country}}',['id'=>'88','data'=>'Guam','char2'=>'GU','char3'=>'GUM']);
        $this->insert('{{%common_country}}',['id'=>'89','data'=>'Guatemala','char2'=>'GT','char3'=>'GTM']);
        $this->insert('{{%common_country}}',['id'=>'90','data'=>'Guinea','char2'=>'GN','char3'=>'GIN']);
        $this->insert('{{%common_country}}',['id'=>'91','data'=>'Guinea - bissau','char2'=>'GW','char3'=>'GNB']);
        $this->insert('{{%common_country}}',['id'=>'92','data'=>'Guyana','char2'=>'GY','char3'=>'GUY']);
        $this->insert('{{%common_country}}',['id'=>'93','data'=>'Haiti','char2'=>'HT','char3'=>'HTI']);
        $this->insert('{{%common_country}}',['id'=>'94','data'=>'Heard AND Mc Donald Islands','char2'=>'HM','char3'=>'HMD']);
        $this->insert('{{%common_country}}',['id'=>'95','data'=>'Honduras','char2'=>'HN','char3'=>'HND']);
        $this->insert('{{%common_country}}',['id'=>'96','data'=>'Hong Kong','char2'=>'HK','char3'=>'HKG']);
        $this->insert('{{%common_country}}',['id'=>'97','data'=>'Hungary','char2'=>'HU','char3'=>'HUN']);
        $this->insert('{{%common_country}}',['id'=>'98','data'=>'Iceland','char2'=>'IS','char3'=>'ISL']);
        $this->insert('{{%common_country}}',['id'=>'99','data'=>'India','char2'=>'IN','char3'=>'IND']);
        $this->insert('{{%common_country}}',['id'=>'100','data'=>'Indonesia','char2'=>'ID','char3'=>'IDN']);
        $this->insert('{{%common_country}}',['id'=>'101','data'=>'Iran (Islamic Republic of)','char2'=>'IR','char3'=>'IRN']);
        $this->insert('{{%common_country}}',['id'=>'102','data'=>'Iraq','char2'=>'IQ','char3'=>'IRQ']);
        $this->insert('{{%common_country}}',['id'=>'103','data'=>'Ireland','char2'=>'IE','char3'=>'IRL']);
        $this->insert('{{%common_country}}',['id'=>'104','data'=>'Israel','char2'=>'IL','char3'=>'ISR']);
        $this->insert('{{%common_country}}',['id'=>'105','data'=>'Italy','char2'=>'IT','char3'=>'ITA']);
        $this->insert('{{%common_country}}',['id'=>'106','data'=>'Jamaica','char2'=>'JM','char3'=>'JAM']);
        $this->insert('{{%common_country}}',['id'=>'107','data'=>'Japan','char2'=>'JP','char3'=>'JPN']);
        $this->insert('{{%common_country}}',['id'=>'108','data'=>'Jordan','char2'=>'JO','char3'=>'JOR']);
        $this->insert('{{%common_country}}',['id'=>'109','data'=>'Kazakhstan','char2'=>'KZ','char3'=>'KAZ']);
        $this->insert('{{%common_country}}',['id'=>'110','data'=>'Kenya','char2'=>'KE','char3'=>'KEN']);
        $this->insert('{{%common_country}}',['id'=>'111','data'=>'Kiribati','char2'=>'KI','char3'=>'KIR']);
        $this->insert('{{%common_country}}',['id'=>'112','data'=>'Korea, democratic People\'s Republic of','char2'=>'KP','char3'=>'PRK']);
        $this->insert('{{%common_country}}',['id'=>'113','data'=>'Korea, republic of','char2'=>'KR','char3'=>'KOR']);
        $this->insert('{{%common_country}}',['id'=>'114','data'=>'Kuwait','char2'=>'KW','char3'=>'KWT']);
        $this->insert('{{%common_country}}',['id'=>'115','data'=>'Kyrgyzstan','char2'=>'KG','char3'=>'KGZ']);
        $this->insert('{{%common_country}}',['id'=>'116','data'=>'Lao People\'s Democratic Republic','char2'=>'LA','char3'=>'LAO']);
        $this->insert('{{%common_country}}',['id'=>'117','data'=>'Latvia','char2'=>'LV','char3'=>'LVA']);
        $this->insert('{{%common_country}}',['id'=>'118','data'=>'Lebanon','char2'=>'LB','char3'=>'LBN']);
        $this->insert('{{%common_country}}',['id'=>'119','data'=>'Lesotho','char2'=>'LS','char3'=>'LSO']);
        $this->insert('{{%common_country}}',['id'=>'120','data'=>'Liberia','char2'=>'LR','char3'=>'LBR']);
        $this->insert('{{%common_country}}',['id'=>'121','data'=>'Libyan Arab Jamahiriya','char2'=>'LY','char3'=>'LBY']);
        $this->insert('{{%common_country}}',['id'=>'122','data'=>'Liechtenstein','char2'=>'LI','char3'=>'LIE']);
        $this->insert('{{%common_country}}',['id'=>'123','data'=>'Lithuania','char2'=>'LT','char3'=>'LTU']);
        $this->insert('{{%common_country}}',['id'=>'124','data'=>'Luxembourg','char2'=>'LU','char3'=>'LUX']);
        $this->insert('{{%common_country}}',['id'=>'125','data'=>'Macau','char2'=>'MO','char3'=>'MAC']);
        $this->insert('{{%common_country}}',['id'=>'126','data'=>'Macedonia, the Former Yugoslav Republic of','char2'=>'MK','char3'=>'MKD']);
        $this->insert('{{%common_country}}',['id'=>'127','data'=>'Madagascar','char2'=>'MG','char3'=>'MDG']);
        $this->insert('{{%common_country}}',['id'=>'128','data'=>'Malawi','char2'=>'MW','char3'=>'MWI']);
        $this->insert('{{%common_country}}',['id'=>'129','data'=>'Malaysia','char2'=>'MY','char3'=>'MYS']);
        $this->insert('{{%common_country}}',['id'=>'130','data'=>'Maldives','char2'=>'MV','char3'=>'MDV']);
        $this->insert('{{%common_country}}',['id'=>'131','data'=>'Mali','char2'=>'ML','char3'=>'MLI']);
        $this->insert('{{%common_country}}',['id'=>'132','data'=>'Malta','char2'=>'MT','char3'=>'MLT']);
        $this->insert('{{%common_country}}',['id'=>'133','data'=>'Marshall Islands','char2'=>'MH','char3'=>'MHL']);
        $this->insert('{{%common_country}}',['id'=>'134','data'=>'Martinique','char2'=>'MQ','char3'=>'MTQ']);
        $this->insert('{{%common_country}}',['id'=>'135','data'=>'Mauritania','char2'=>'MR','char3'=>'MRT']);
        $this->insert('{{%common_country}}',['id'=>'136','data'=>'Mauritius','char2'=>'MU','char3'=>'MUS']);
        $this->insert('{{%common_country}}',['id'=>'137','data'=>'Mayotte','char2'=>'YT','char3'=>'MYT']);
        $this->insert('{{%common_country}}',['id'=>'138','data'=>'Mexico','char2'=>'MX','char3'=>'MEX']);
        $this->insert('{{%common_country}}',['id'=>'139','data'=>'Micronesia, federated States of','char2'=>'FM','char3'=>'FSM']);
        $this->insert('{{%common_country}}',['id'=>'140','data'=>'Moldova, republic of','char2'=>'MD','char3'=>'MDA']);
        $this->insert('{{%common_country}}',['id'=>'141','data'=>'Monaco','char2'=>'MC','char3'=>'MCO']);
        $this->insert('{{%common_country}}',['id'=>'142','data'=>'Mongolia','char2'=>'MN','char3'=>'MNG']);
        $this->insert('{{%common_country}}',['id'=>'143','data'=>'Montserrat','char2'=>'MS','char3'=>'MSR']);
        $this->insert('{{%common_country}}',['id'=>'144','data'=>'Morocco','char2'=>'MA','char3'=>'MAR']);
        $this->insert('{{%common_country}}',['id'=>'145','data'=>'Mozambique','char2'=>'MZ','char3'=>'MOZ']);
        $this->insert('{{%common_country}}',['id'=>'146','data'=>'Myanmar','char2'=>'MM','char3'=>'MMR']);
        $this->insert('{{%common_country}}',['id'=>'147','data'=>'Namibia','char2'=>'NA','char3'=>'NAM']);
        $this->insert('{{%common_country}}',['id'=>'148','data'=>'Nauru','char2'=>'NR','char3'=>'NRU']);
        $this->insert('{{%common_country}}',['id'=>'149','data'=>'Nepal','char2'=>'NP','char3'=>'NPL']);
        $this->insert('{{%common_country}}',['id'=>'150','data'=>'Netherlands','char2'=>'NL','char3'=>'NLD']);
        $this->insert('{{%common_country}}',['id'=>'151','data'=>'Netherlands Antilles','char2'=>'AN','char3'=>'ANT']);
        $this->insert('{{%common_country}}',['id'=>'152','data'=>'New Caledonia','char2'=>'NC','char3'=>'NCL']);
        $this->insert('{{%common_country}}',['id'=>'153','data'=>'New Zealand','char2'=>'NZ','char3'=>'NZL']);
        $this->insert('{{%common_country}}',['id'=>'154','data'=>'Nicaragua','char2'=>'NI','char3'=>'NIC']);
        $this->insert('{{%common_country}}',['id'=>'155','data'=>'Niger','char2'=>'NE','char3'=>'NER']);
        $this->insert('{{%common_country}}',['id'=>'156','data'=>'Nigeria','char2'=>'NG','char3'=>'NGA']);
        $this->insert('{{%common_country}}',['id'=>'157','data'=>'Niue','char2'=>'NU','char3'=>'NIU']);
        $this->insert('{{%common_country}}',['id'=>'158','data'=>'Norfolk Island','char2'=>'NF','char3'=>'NFK']);
        $this->insert('{{%common_country}}',['id'=>'159','data'=>'Northern Mariana Islands','char2'=>'MP','char3'=>'MNP']);
        $this->insert('{{%common_country}}',['id'=>'160','data'=>'Norway','char2'=>'NO','char3'=>'NOR']);
        $this->insert('{{%common_country}}',['id'=>'161','data'=>'Oman','char2'=>'OM','char3'=>'OMN']);
        $this->insert('{{%common_country}}',['id'=>'162','data'=>'Pakistan','char2'=>'PK','char3'=>'PAK']);
        $this->insert('{{%common_country}}',['id'=>'163','data'=>'Palau','char2'=>'PW','char3'=>'PLW']);
        $this->insert('{{%common_country}}',['id'=>'164','data'=>'Panama','char2'=>'PA','char3'=>'PAN']);
        $this->insert('{{%common_country}}',['id'=>'165','data'=>'Papua New Guinea','char2'=>'PG','char3'=>'PNG']);
        $this->insert('{{%common_country}}',['id'=>'166','data'=>'Paraguay','char2'=>'PY','char3'=>'PRY']);
        $this->insert('{{%common_country}}',['id'=>'167','data'=>'Peru','char2'=>'PE','char3'=>'PER']);
        $this->insert('{{%common_country}}',['id'=>'168','data'=>'Philippines','char2'=>'PH','char3'=>'PHL']);
        $this->insert('{{%common_country}}',['id'=>'169','data'=>'Pitcairn','char2'=>'PN','char3'=>'PCN']);
        $this->insert('{{%common_country}}',['id'=>'170','data'=>'Poland','char2'=>'PL','char3'=>'POL']);
        $this->insert('{{%common_country}}',['id'=>'171','data'=>'Portugal','char2'=>'PT','char3'=>'PRT']);
        $this->insert('{{%common_country}}',['id'=>'172','data'=>'Puerto Rico','char2'=>'PR','char3'=>'PRI']);
        $this->insert('{{%common_country}}',['id'=>'173','data'=>'Qatar','char2'=>'QA','char3'=>'QAT']);
        $this->insert('{{%common_country}}',['id'=>'174','data'=>'Reunion','char2'=>'RE','char3'=>'REU']);
        $this->insert('{{%common_country}}',['id'=>'175','data'=>'Romania','char2'=>'RO','char3'=>'ROM']);
        $this->insert('{{%common_country}}',['id'=>'176','data'=>'Russian Federation','char2'=>'RU','char3'=>'RUS']);
        $this->insert('{{%common_country}}',['id'=>'177','data'=>'Rwanda','char2'=>'RW','char3'=>'RWA']);
        $this->insert('{{%common_country}}',['id'=>'178','data'=>'Saint Kitts AND Nevis','char2'=>'KN','char3'=>'KNA']);
        $this->insert('{{%common_country}}',['id'=>'179','data'=>'Saint Lucia','char2'=>'LC','char3'=>'LCA']);
        $this->insert('{{%common_country}}',['id'=>'180','data'=>'Saint Vincent AND the Grenadines','char2'=>'VC','char3'=>'VCT']);
        $this->insert('{{%common_country}}',['id'=>'181','data'=>'Samoa','char2'=>'WS','char3'=>'WSM']);
        $this->insert('{{%common_country}}',['id'=>'182','data'=>'San Marino','char2'=>'SM','char3'=>'SMR']);
        $this->insert('{{%common_country}}',['id'=>'183','data'=>'Sao Tome AND Principe','char2'=>'ST','char3'=>'STP']);
        $this->insert('{{%common_country}}',['id'=>'184','data'=>'Saudi Arabia','char2'=>'SA','char3'=>'SAU']);
        $this->insert('{{%common_country}}',['id'=>'185','data'=>'Senegal','char2'=>'SN','char3'=>'SEN']);
        $this->insert('{{%common_country}}',['id'=>'186','data'=>'Seychelles','char2'=>'SC','char3'=>'SYC']);
        $this->insert('{{%common_country}}',['id'=>'187','data'=>'Sierra Leone','char2'=>'SL','char3'=>'SLE']);
        $this->insert('{{%common_country}}',['id'=>'188','data'=>'Singapore','char2'=>'SG','char3'=>'SGP']);
        $this->insert('{{%common_country}}',['id'=>'189','data'=>'Slovakia (Slovak Republic)','char2'=>'SK','char3'=>'SVK']);
        $this->insert('{{%common_country}}',['id'=>'190','data'=>'Slovenia','char2'=>'SI','char3'=>'SVN']);
        $this->insert('{{%common_country}}',['id'=>'191','data'=>'Solomon Islands','char2'=>'SB','char3'=>'SLB']);
        $this->insert('{{%common_country}}',['id'=>'192','data'=>'Somalia','char2'=>'SO','char3'=>'SOM']);
        $this->insert('{{%common_country}}',['id'=>'193','data'=>'South Africa','char2'=>'ZA','char3'=>'ZAF']);
        $this->insert('{{%common_country}}',['id'=>'194','data'=>'South Georgia AND the South Sandwich Islands','char2'=>'GS','char3'=>'SGS']);
        $this->insert('{{%common_country}}',['id'=>'195','data'=>'Spain','char2'=>'ES','char3'=>'ESP']);
        $this->insert('{{%common_country}}',['id'=>'196','data'=>'Sri Lanka','char2'=>'LK','char3'=>'LKA']);
        $this->insert('{{%common_country}}',['id'=>'197','data'=>'St.Helena','char2'=>'SH','char3'=>'SHN']);
        $this->insert('{{%common_country}}',['id'=>'198','data'=>'St.Pierre AND Miquelon','char2'=>'PM','char3'=>'SPM']);
        $this->insert('{{%common_country}}',['id'=>'199','data'=>'Sudan','char2'=>'SD','char3'=>'SDN']);
        $this->insert('{{%common_country}}',['id'=>'200','data'=>'Suriname','char2'=>'SR','char3'=>'SUR']);
        $this->insert('{{%common_country}}',['id'=>'201','data'=>'Svalbard AND Jan Mayen Islands','char2'=>'SJ','char3'=>'SJM']);
        $this->insert('{{%common_country}}',['id'=>'202','data'=>'Swaziland','char2'=>'SZ','char3'=>'SWZ']);
        $this->insert('{{%common_country}}',['id'=>'203','data'=>'Sweden','char2'=>'SE','char3'=>'SWE']);
        $this->insert('{{%common_country}}',['id'=>'204','data'=>'Switzerland','char2'=>'CH','char3'=>'CHE']);
        $this->insert('{{%common_country}}',['id'=>'205','data'=>'Syrian Arab Republic','char2'=>'SY','char3'=>'SYR']);
        $this->insert('{{%common_country}}',['id'=>'206','data'=>'Taiwan','char2'=>'TW','char3'=>'TWN']);
        $this->insert('{{%common_country}}',['id'=>'207','data'=>'Tajikistan','char2'=>'TJ','char3'=>'TJK']);
        $this->insert('{{%common_country}}',['id'=>'208','data'=>'Tanzania, united Republic of','char2'=>'TZ','char3'=>'TZA']);
        $this->insert('{{%common_country}}',['id'=>'209','data'=>'Thailand','char2'=>'TH','char3'=>'THA']);
        $this->insert('{{%common_country}}',['id'=>'210','data'=>'Togo','char2'=>'TG','char3'=>'TGO']);
        $this->insert('{{%common_country}}',['id'=>'211','data'=>'Tokelau','char2'=>'TK','char3'=>'TKL']);
        $this->insert('{{%common_country}}',['id'=>'212','data'=>'Tonga','char2'=>'TO','char3'=>'TON']);
        $this->insert('{{%common_country}}',['id'=>'213','data'=>'Trinidad AND Tobago','char2'=>'TT','char3'=>'TTO']);
        $this->insert('{{%common_country}}',['id'=>'214','data'=>'Tunisia','char2'=>'TN','char3'=>'TUN']);
        $this->insert('{{%common_country}}',['id'=>'215','data'=>'Turkey','char2'=>'TR','char3'=>'TUR']);
        $this->insert('{{%common_country}}',['id'=>'216','data'=>'Turkmenistan','char2'=>'TM','char3'=>'TKM']);
        $this->insert('{{%common_country}}',['id'=>'217','data'=>'Turks AND Caicos Islands','char2'=>'TC','char3'=>'TCA']);
        $this->insert('{{%common_country}}',['id'=>'218','data'=>'Tuvalu','char2'=>'TV','char3'=>'TUV']);
        $this->insert('{{%common_country}}',['id'=>'219','data'=>'Uganda','char2'=>'UG','char3'=>'UGA']);
        $this->insert('{{%common_country}}',['id'=>'220','data'=>'Ukraine','char2'=>'UA','char3'=>'UKR']);
        $this->insert('{{%common_country}}',['id'=>'221','data'=>'United Arab Emirates','char2'=>'AE','char3'=>'ARE']);
        $this->insert('{{%common_country}}',['id'=>'222','data'=>'United Kingdom','char2'=>'GB','char3'=>'GBR']);
        $this->insert('{{%common_country}}',['id'=>'223','data'=>'United States','char2'=>'US','char3'=>'USA']);
        $this->insert('{{%common_country}}',['id'=>'224','data'=>'United States Minor Outlying Islands','char2'=>'UM','char3'=>'UMI']);
        $this->insert('{{%common_country}}',['id'=>'225','data'=>'Uruguay','char2'=>'UY','char3'=>'URY']);
        $this->insert('{{%common_country}}',['id'=>'226','data'=>'Uzbekistan','char2'=>'UZ','char3'=>'UZB']);
        $this->insert('{{%common_country}}',['id'=>'227','data'=>'Vanuatu','char2'=>'VU','char3'=>'VUT']);
        $this->insert('{{%common_country}}',['id'=>'228','data'=>'Vatican City State (Holy See)','char2'=>'VA','char3'=>'VAT']);
        $this->insert('{{%common_country}}',['id'=>'229','data'=>'Venezuela','char2'=>'VE','char3'=>'VEN']);
        $this->insert('{{%common_country}}',['id'=>'230','data'=>'Viet Nam','char2'=>'VN','char3'=>'VNM']);
        $this->insert('{{%common_country}}',['id'=>'231','data'=>'Virgin Islands (British)','char2'=>'VG','char3'=>'VGB']);
        $this->insert('{{%common_country}}',['id'=>'232','data'=>'Virgin Islands (U.S.)','char2'=>'VI','char3'=>'VIR']);
        $this->insert('{{%common_country}}',['id'=>'233','data'=>'Wallis AND Futuna Islands','char2'=>'WF','char3'=>'WLF']);
        $this->insert('{{%common_country}}',['id'=>'234','data'=>'Western Sahara','char2'=>'EH','char3'=>'ESH']);
        $this->insert('{{%common_country}}',['id'=>'235','data'=>'Yemen','char2'=>'YE','char3'=>'YEM']);
        $this->insert('{{%common_country}}',['id'=>'236','data'=>'Yugoslavia','char2'=>'YU','char3'=>'YUG']);
        $this->insert('{{%common_country}}',['id'=>'237','data'=>'Zaire','char2'=>'ZR','char3'=>'ZAR']);
        $this->insert('{{%common_country}}',['id'=>'238','data'=>'Zambia','char2'=>'ZM','char3'=>'ZMB']);
        $this->insert('{{%common_country}}',['id'=>'239','data'=>'Zimbabwe','char2'=>'ZW','char3'=>'ZWE']);
        $this->execute('SET foreign_key_checks = 1;');



    }


    /**
     * @return bool
     */
    public function down()
    {

    }
}
