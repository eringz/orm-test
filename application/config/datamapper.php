<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Data Mapper Configuration
 *
 * Global configuration settings that apply to all DataMapped models.
 */

//If set, will require all tables (both normal and joining tables) to have this prefix. type: string.
$config['prefix'] = '';

//If set, will require all joining tables to have this prefix (overrides prefix). type string.
$config['join_prefix'] = '';

//If set, will be prepended onto each error message. type string.
$config['error_prefix'] = '<p>';

//If set, will be appended onto each error message. type string.
$config['error_suffix'] = '</p>';

//The field name for storing the created timestamp. type string.
$config['created_field'] = 'created';

//The field name for storing the updated timestamp. type string.
$config['updated_field'] = 'updated';

//If set to TRUE, will use local timestamps. Otherwise, GMT/UTC is used. type boolean.
$config['local_time'] = FALSE;

//If set to TRUE, will use 'Unix Timestamp' instead of 'DateTime'. type boolean.
$config['unix_timestamp'] = FALSE;

//Overrides the default date-compatible timestamp format. type string
$config['timestamp_format'] = 'Y-m-d H:i:s O';

/**
 * When set, this pattern is used to tell Datamapper ORM which language file to load for each model.
 * For new installations, this actually defaults to 'model_${model}'. type string.
 */
$config['lang_file_format'] = 'model_${model}';

//Tells Datamapper ORM which language pattern to use when loading labels for fields. type string.
$config['field_label_lang_format'] = '${model}_${field}';

//If set to TRUE, will automatically handle transactions. type boolean.
$config['auto_transaction'] = FALSE;

//If set to TRUE, will automatically populate related "has many" objects on first access. type boolean.
$config['auto_populate_has_many'] = FALSE;

//If set to TRUE, will automatically populate related "has one" objects on first access. type boolean.
$config['auto_populate_has_one'] = FALSE;

//If TRUE, uses the old DataMapper behavior for indexing the all array. type boolean.
$config['all_array_uses_ids'] = FALSE;

// set to FALSE to use the same DB instance across the board (breaks subqueries)
// Set to any acceptable parameters to $CI->database() to override the default.
/**
 * If '' (empty string), Datamapper ORM models will connect using the default DataBase config.
 * If FALSE, all models will connect to $CI->db. (Note: this breaks subqueries, and any feature that relies on subqueries.)
 * If anything else, the value is passed into $CI->load->database(). See the CodeIgniter manual for more information.
 * type mixed
 */
$config['db_params'] = '';

// Uncomment to enable the production cache
// $config['production_cache'] = APPPATH.'cache';

//The default path to extensions, relative to application. type string
$config['extensions_path'] = '../sparks/Datamapper-ORM/1.8.2/extensions';

//	An array of extensions to load globally on every class. type array
$config['extensions'] = array();

/* End of file datamapper.php */
/* Location: ./sparks/Datamapper-ORM/config/datamapper.php */
