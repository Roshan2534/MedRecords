<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Migration_Add_patients extends CI_Migration{
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
            'firstname'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            ),
            'lastname'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            ),
            'email'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            ),
            'age'=>array(
                'type'=>'INT',
                'constraint' => 3,
                'unsigned' => TRUE,
            ),
            'gender'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            ),
            'address'=>array(
                'type'=>'varchar',
                'constraint'=>'500'
            ),
            'Contact_no'=>array(
                'type'=>'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
            ),
            'Bloodgrp'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            ),
            'AllergicTo'=>array(
                'type'=>'varchar',
                'constraint'=>'200'
            ),
            'Significant_history'=>array(
                'type'=>'varchar',
                'constraint'=>'500'
            ),
            'profile_pic'=> array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),

            'doc_id'=> array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            )        
            
            

        ));
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('patients');
        
    }
    public function down()
        {
            $this->dbforge->drop_table('patients');
        }
}