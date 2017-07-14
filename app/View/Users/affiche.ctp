
<ul>
    
    <?php foreach ($liste as $l =>$list): ?>
    <li>
        <h3>  nom : <?= $list['User']['nom']; ?>  <?= $list['User']['prenom']; ?>
        </h1>
        </li>
    <li>
       age : <?= $list['User']['age']; ?>  
    </li>
    <li>
       adresse : <?= $list['User']['adresse']; ?>  
    </li>
    
    <?php endforeach ?>
</ul>