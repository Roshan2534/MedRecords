<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Migration_Add_doctors extends CI_Migration{
    public function __construct(){
        parent::__construct();
    }

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'=>array(
                'type'=>'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            ),
            'password'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            )
            
             ));
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('doctor');
        
    }
    public function down()
        {
            $this->dbforge->drop_table('doctor');
        }
}