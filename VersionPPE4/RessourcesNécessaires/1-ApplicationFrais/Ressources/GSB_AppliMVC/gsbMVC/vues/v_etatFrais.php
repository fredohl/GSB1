
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : 
    </h3>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
              
                     
    </p>
  	<table class="listeLegere">
  	   <caption>Eléments forfaitisés </caption>
        <tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['LIBELLE'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
		?>
		</tr>
        <tr>
        <?php
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['QUANTITE'];
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
		</tr>
    </table>
  	<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class="montant">Montant</th> 
                <th class="modification">Modification </th>
                <th class="suppression"> Suppression </th>
             </tr>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['DATE1'];
			$libelle = $unFraisHorsForfait['LIBELLE'];
			$montant = $unFraisHorsForfait['MONTANT'];
                        $_SESSION['date'] = $date;
                        $_SESSION['libelle'] = $libelle;
                        $_SESSION['montant'] = $montant;
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                
                
             <form method="POST" action ="index.php?uc=etatFrais&action=voirEtatFrais ">
                <td> <input type="submit" value ="Modifier" /> </td>
                <td> <input type="submit" value ="Supprimer" /> </td>
                <? echo $_SESSION['date']. "" .$_SESSION['libelle']."".$_SESSION['montant'];?>
                </form>
             </tr>
        <?php 
          }
		?>
    </table>
  </div>
  </div>
 













