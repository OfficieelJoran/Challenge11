<?php
$lijst = array (

    array ("adres"=>'geitenweg 8',"voornaam"=>'john',"achternaam"=>'blanaken',"mobiel"=>'0688447756'),
    array ("adres"=>'smokweg 3',"voornaam"=>'bertha',"achternaam"=>'berkelwacht',"mobiel"=>'0688302830'),
    array ("adres"=>'braamstraat 2',"voornaam"=>'timmie',"achternaam"=>'boi',"mobiel"=>'06829174048'),
    array ("adres"=>'gerenderweg',"voornaam"=>'brethel',"achternaam"=>'sjenk',"mobiel"=>'06927810374'),
    array ("adres"=>'eikenweg',"voornaam"=>'bram',"achternaam"=>'beethoven',"mobiel"=>'06830182949'),
);

?>
<?php if (count($lijst) > 0): ?>
<table>
  <tr>
    <th><?php echo implode('</th><th>', array_keys(current($lijst))); ?></th>
  </tr>

  <?php foreach ($lijst as $row): array_map('htmlentities', $row); ?>
  <tr>
    <td><?php echo implode('</th><td>', $row); ?></td>
  </tr>
<?php endforeach; ?>
</table>
<?php endif; ?>