<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Mongodb extends BaseConfig
{    
  
    public $active = 'default';

    public $default = array('no_auth' => true,
                            'hostname' => 'mongodb',
                            'port' => '27017',
                            'username' => '',
                            'password' => '',
                            'database' => 'meli_app',
                            'db_debug' => TRUE,
                            'return_as' => 'array',
                            'write_concerns' => 1,
                            'journal' => TRUE,
                            'read_preference' => 'primary',
                            'read_concern' => 'local',
                            'legacy_support' => TRUE
                            );

    public $collections = array(
                                'users' => 'users',
                                'groups' => 'groups',
                                'login_attempts'=> 'login_attempts'
                            );


    /*
    public $no_auth = TRUE;
    public $hostname = "localhost";
    public $port = "27017";
    public $username = "";
    public $password = "";
    public $database = "meli_app";
    public $db_debug = TRUE;
    public $return_as = "array";
    public $write_concerns = 1;
    public $journal = TRUE;
    public $read_preference = 'primary';
    public $read_concern = 'local';
    public $legacy_support = TRUE;
    
    /*
    public $config = array(
        array('mongo_db' => array('active' => 'default')),
        array('mongo_db' => array('default' => array('no_auth' => true))),
        array('mongo_db' => array('default' => array('hostname' => 'localhost'))),
        array('mongo_db' => array('default' => array('port' => '27017'))),
        array('mongo_db' => array('default' => array('username' => ''))),
        array('mongo_db' => array('default' => array('password' => ''))),
        array('mongo_db' => array('default' => array('database' => 'meli_app'))),
        array('mongo_db' => array('default' => array('db_debug' => TRUE))),
        array('mongo_db' => array('default' => array('return_as' => 'array'))),
        array('mongo_db' => array('default' => array('write_concerns' => 1))),
        array('mongo_db' => array('default' => array('journal' => TRUE))),
        array('mongo_db' => array('default' => array('read_preference' => 'primary'))),
        array('mongo_db' => array('default' => array('read_concern' => 'local'))),
        array('mongo_db' => array('default' => array('legacy_support' => TRUE)))

    );

    
    $config = array('mongo_db' => array('active' => 'default'));
    public $config = array('mongo_db' => array('default' => array('no_auth' => true)));
    public $config = array('mongo_db' => array('default' => array('hostname' => 'localhost')));
    public $config = array('mongo_db' => array('default' => array('port' => '27017')));
    public $config = array('mongo_db' => array('default' => array('username' => '')));
    public $config = array('mongo_db' => array('default' => array('password' => '')));
    public $config = array('mongo_db' => array('default' => array('database' => 'meli_app')));
    public $config = array('mongo_db' => array('default' => array('db_debug' => TRUE)));
    public $config = array('mongo_db' => array('default' => array('return_as' => 'array')));
    public $config = array('mongo_db' => array('default' => array('write_concerns' => (int)1)));
    public $config = array('mongo_db' => array('default' => array('journal' => TRUE)));
    public $config = array('mongo_db' => array('default' => array('read_preference' => 'primary')));
    public $config = array('mongo_db' => array('default' => array('read_concern' => 'local')));
    public $config = array('mongo_db' => array('default' => array('legacy_support' => TRUE)));
    */
    /*
    $config['mongo_db']['active'] = 'default';
    $config['mongo_db']['default']['no_auth'] = true;
    $config['mongo_db']['default']['hostname'] = 'localhost';
    $config['mongo_db']['default']['port'] = '27017';
    $config['mongo_db']['default']['username'] = '';
    $config['mongo_db']['default']['password'] = '';
    $config['mongo_db']['default']['database'] = 'meli_app';
    $config['mongo_db']['default']['db_debug'] = TRUE;
    $config['mongo_db']['default']['return_as'] = 'array';
    $config['mongo_db']['default']['write_concerns'] = (int)1;
    $config['mongo_db']['default']['journal'] = TRUE;
    $config['mongo_db']['default']['read_preference'] = 'primary'; 
    $config['mongo_db']['default']['read_concern'] = 'local'; //'local', 'majority' or 'linearizable'
    $config['mongo_db']['default']['legacy_support'] = TRUE;
    */
    
    /* End of file database.php */
    /* Location: ./application/config/database.php */
    
}
