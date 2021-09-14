<?php
/**
 * @var \App\View\AppView $this
 */

 $siteDescription = "Regent street dental was established in 1982 as a local family practice
    and now operates six surgeries providing a wide range of dental care.";
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
        
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['main']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
   
</head>
<body>
    <?= $this->element('header', ['cache' => true]); ?>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <?= $this->element('footer', ['cache' => true]); ?>

    <!-- JavaScript -->
    <?= $this->fetch('script') ?>
</body>
</html>
