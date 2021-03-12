<!-- Header -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <div class="w3-content">
            <?php if($login->user['conect']):?>
            <div class="w3-dropdown-hover w3-hide-small">
                <a href="<?php  echo $chemain; ?>#home"  class="w3-padding-large w3-button w3-black">Accueil</a>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="<?php  echo $chemain; ?>#about" class="w3-bar-item w3-button">Sur nous</a>
                    <a href="<?php  echo $chemain; ?>#note" class="w3-bar-item w3-button">Nous sommes utile pour</a>
                    <a href="<?php  echo $chemain; ?>#compteur" class="w3-bar-item w3-button">Nos service</a>
                </div>
            </div>
            <div class="w3-dropdown-hover w3-hide-small">
                <a href="<?php  echo $chemain; ?>1"  class="w3-padding-large w3-button w3-black">L1</a>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="<?php  echo $chemain; ?>1/cours" class="w3-bar-item w3-button">Cours</a>
                    <a href="<?php  echo $chemain; ?>1/TD" class="w3-bar-item w3-button">T.D</a>
                    <a href="<?php  echo $chemain; ?>1/TP" class="w3-bar-item w3-button">T.P</a>
                    <a href="<?php  echo $chemain; ?>1/test" class="w3-bar-item w3-button">Test</a>
                    <a href="<?php  echo $chemain; ?>1/examin" class="w3-bar-item w3-button">Examin</a>
                </div>
            </div>
            <div class="w3-dropdown-hover w3-hide-small">
                <a href="<?php  echo $chemain; ?>2"  class="w3-padding-large w3-button w3-black">L2</a>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="<?php  echo $chemain; ?>2/cours" class="w3-bar-item w3-button">Cours</a>
                    <a href="<?php  echo $chemain; ?>2/TD" class="w3-bar-item w3-button">T.D</a>
                    <a href="<?php  echo $chemain; ?>2/TP" class="w3-bar-item w3-button">T.P</a>
                    <a href="<?php  echo $chemain; ?>2/test" class="w3-bar-item w3-button">Test</a>
                    <a href="<?php  echo $chemain; ?>2/examin" class="w3-bar-item w3-button">Examin</a>
                </div>
            </div>
            <div class="w3-dropdown-hover w3-hide-small">
                <a href="<?php  echo $chemain; ?>3"  class="w3-padding-large w3-button w3-black">L3</a>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="<?php  echo $chemain; ?>3/cours" class="w3-bar-item w3-button">Cours</a>
                    <a href="<?php  echo $chemain; ?>3/TD" class="w3-bar-item w3-button">T.D</a>
                    <a href="<?php  echo $chemain; ?>3/TP" class="w3-bar-item w3-button">T.P</a>
                    <a href="<?php  echo $chemain; ?>3/test" class="w3-bar-item w3-button">Test</a>
                    <a href="<?php  echo $chemain; ?>3/examin" class="w3-bar-item w3-button">Examin</a>
                </div>
            </div>
            <!--mana bdit nmodifi-->
            <a href="<?php  echo $chemain; ?>signout" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-sign-out"></i></a>
            <?php  else:?>
            <?php  if($html->data['page']==="Signin"):?>
            <a href="<?php  echo $chemain; ?>signup" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-user-plus"></i></a>
            <?php  else:?>
            <a href="<?php  echo $chemain; ?>signin" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-sign-in"></i></a>
            <?php  endif?>
            <?php  endif?>
        </div>
    </div>
</div>