<?php
foreach($objet as $objet): ?>
<h2><?= $objet->nomObj() ?></h2>
<p><?= $objet->description() ?></p>
<?php endforeach; ?>