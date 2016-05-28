<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(array('bootstrap.min', 'stylesheet')); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div id="container">
            <div class="row header">
  <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- <a class="navbar-brand" href="index.php">Employee Management System</a> -->
          <?php
            echo $this->Html->link(
            'Employee Management System',
            array(
                'controller' => 'employees',
                'action' => 'workbench'
            ),
            array(
                'class'=>'navbar-brand'
                )
);
        ?>
        </div>
      </div>              
    </div>
  </div> 
            <center>
            <?php echo $this->Flash->render(); ?>
            </center>

            <?php echo $this->fetch('content'); ?>
        </div>

    <footer>
    </footer>
</body>
</html>
