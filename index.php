<?php
// Do Not Remove
$section_id = explode( ".", basename(__FILE__, '.php')  );
$section_id_name = explode( ".", basename(__FILE__, '.php')  );
$section_id_name = ''.$section_id_name[0];
$array_values_section = getCsvValues($GLOBALS['_googlesheet_url'].'sheet=section1');


// End Do Not Remove
// Place your code below

?>
<section id="<?=$section_id_name;?>" class="section " data-section="1" >
          <div class="sol" style="background-image:url(<?=picturePath($array_values_section[3][1]);?>);">
            <p class="sol"><?=$array_values_section[3][2];?></p>
           
            <div class="confettis" style="background-image:url(<?=picturePath($array_values_section[1][1]);?>);">
            </div>
                <div class="circle">
                     <p><?=$array_values_section[2][1];?></p>
                     <div class="border"></div>
                     <p><?=$array_values_section[2][2];?></p>
                     <img src="<?=picturePath($array_values_section[2][3]);?>" alt="<?=$array_values_section[2][4];?>">
                 </div>
          </div> 
          
        
          <img class="aspi" src="<?=picturePath($array_values_section[4][1]);?>" alt="">
</section>

<?php 
// Do Not Remove
unset($array_values_section, $array_values_section_loop,$row,$section_id); 

// End Do Not Remove
?>
