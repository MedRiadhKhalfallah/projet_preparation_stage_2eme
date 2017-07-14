add page

<?= $this->Form->create('User') ?>
<?= $this->Form->input('nom' , array('label' => 'votre nom' , 'placeholder' => 'nom')); ?>
<?= $this->Form->input('prenom' , array('label' => 'votre prenom' , 'placeholder' => 'prenom')); ?>
<?= $this->Form->input('age' , array('label' => 'votre age' , 'placeholder' => 'age')); ?>
<?= $this->Form->input('adresse' , array('label' => 'votre adress' , 'placeholder' => 'adress')); ?>

<?= $this->Form->end('ajout'); ?>