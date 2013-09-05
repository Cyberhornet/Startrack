<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

class DBtest extends CTestCase
{
    public function testconnection()
    {
        $this->assertNotNull(Yii::app()->db->connectionString);
    }
    
}
?>
