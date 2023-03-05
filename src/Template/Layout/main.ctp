<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txta
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Routing\Auth;
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

    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') ?>
    <?php //$this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= FULL_BASE_URL ?>users/login">Home <span class="sr-only">(current)</span></a>
          </li>
          <?php if($Auth->user()): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= FULL_BASE_URL ?>users/add">Create user</a>
              </li>
            <?php endif; ?>
          <li class="nav-item">
            <?php if(!is_null($Auth->user('id'))): ?>
                <a class="nav-link" href="<?= FULL_BASE_URL ?>users/logout">Logout</a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </nav>

    <?= $this->Flash->render() ?>

    <div class="container clearfix">
        <div class="mt-3 mb-3">
            <?= $this->fetch('content') ?>
        </div>
        
    </div>

    <footer>
        <?= $this->Html->script('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js') ?>
        <?= $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js') ?>
        <?= $this->fetch('scriptBottom')?>
    </footer>
</body>
</html>
