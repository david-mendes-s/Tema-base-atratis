<?php 
/////////////////////////////////////////////////////////
// Configurações Gerais do Bloco
// template: conf_gerais.php
// Variáveis diponíveis: $geraisCSS, $corFonte, $animacao

include "conf_gerais.php";

/////////////////////////////////////////////////////////

$titulo = get_sub_field('titulo', "option");
$descricao = get_sub_field('descricao', "option");
$link_telefone = get_sub_field('link_telefone');
$telefone = get_sub_field('telefone');
$shortcode_form = get_sub_field('shortcode', "option");
?>

<section class="secaoContato <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>"
  <?php echo $animacao; ?>>


  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="content">
          <h2>
            <?php echo $titulo; ?>
          </h2>
          <p>
            <?php echo $descricao; ?>
          </p>
          <?php 
                  $link_whatsapp = get_field('link_whatsapp', "option");
                  $texto_whatsapp = get_field('texto_whatsapp', "option");
                  $endereco = get_field('endereco', "option");
                  $endereco_link = get_field('link_endereco', "option");
                  
                  ?>
          
          <a href="<?php echo $link_telefone; ?>" class="link-contato" target="_blank">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.3568 3.63756C20.205 2.47997 18.8331 1.56215 17.3212 0.937635C15.8092 0.313116 14.1873 -0.00560013 12.5503 7.44618e-05C5.69095 7.44618e-05 0.100503 5.56256 0.100503 12.3875C0.100503 14.575 0.678392 16.7 1.75879 18.575L0 25L6.59548 23.275C8.41709 24.2625 10.4648 24.7875 12.5503 24.7875C19.4095 24.7875 25 19.225 25 12.4C25 9.08755 23.706 5.97506 21.3568 3.63756ZM12.5503 22.6875C10.691 22.6875 8.86935 22.1875 7.27387 21.25L6.89698 21.025L2.97739 22.05L4.0201 18.25L3.76884 17.8625C2.73586 16.2212 2.18736 14.3241 2.18593 12.3875C2.18593 6.71255 6.83417 2.08757 12.5377 2.08757C15.3015 2.08757 17.902 3.16257 19.8492 5.11256C20.8134 6.06751 21.5775 7.20338 22.0972 8.45433C22.6169 9.70528 22.882 11.0464 22.8769 12.4C22.902 18.075 18.2538 22.6875 12.5503 22.6875ZM18.2286 14.9875C17.9146 14.8375 16.3819 14.0875 16.1055 13.975C15.8166 13.875 15.6156 13.825 15.402 14.125C15.1884 14.4375 14.598 15.1375 14.4221 15.3375C14.2462 15.55 14.0578 15.575 13.7437 15.4125C13.4296 15.2625 12.4246 14.925 11.2437 13.875C10.3141 13.05 9.69849 12.0375 9.51005 11.725C9.33417 11.4125 9.48492 11.25 9.64824 11.0875C9.78643 10.95 9.96231 10.725 10.1131 10.55C10.2638 10.375 10.3266 10.2375 10.4271 10.0375C10.5276 9.82504 10.4774 9.65005 10.402 9.50005C10.3266 9.35005 9.69849 7.82505 9.44724 7.20005C9.19598 6.60006 8.93216 6.67505 8.74372 6.66255H8.1407C7.92714 6.66255 7.6005 6.73755 7.31156 7.05005C7.03518 7.36255 6.23116 8.11255 6.23116 9.63755C6.23116 11.1625 7.34925 12.6375 7.5 12.8375C7.65075 13.05 9.69849 16.175 12.8141 17.5125C13.5553 17.8375 14.1332 18.025 14.5854 18.1625C15.3266 18.4 16.005 18.3625 16.5452 18.2875C17.1482 18.2 18.392 17.5375 18.6432 16.8125C18.907 16.0875 18.907 15.475 18.8191 15.3375C18.7312 15.2 18.5427 15.1375 18.2286 14.9875Z" fill="#007A3B"/>
          </svg>

            <?php echo $telefone; ?>
          </a>

          

        </div>
      </div>
      <div class="col-lg-7">
        <div class="formulario">
          <?php echo do_shortcode($shortcode_form); ?>
        </div>
      </div>
    </div>
  </div>
</section>