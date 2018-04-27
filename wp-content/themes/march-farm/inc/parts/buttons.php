<?php if (have_rows('button')):?>
    <?php while (have_rows('button')) : the_row();
    $btn_buttontext = get_sub_field('btn_button_text');
    $btn_type_of_link = get_sub_field('btn_type_of_link');

    if ($btn_type_of_link == "page")
    {
      $btn_button_link = get_sub_field('btn_page_link');
      $target = '_self';
    }
    elseif ($btn_type_of_link == "url")
    {
      $btn_button_link = get_sub_field('btn_url_link');;
      $target = '_blank';
    }
    elseif ($btn_type_of_link == "file")
    {
      $btn_button_link = get_sub_field('btn_file_link');
      $target = '_blank';
    }
    elseif ($btn_type_of_link == "anchor")
    {
      $btn_button_link = '#'. get_sub_field('btn_anchor');
      $target = '_self';
    }
    else
    {

    }
    ?>

        <div class="row justify-content-md-center">
              <a target="<?= $target; ?>" href="<?= $btn_button_link; ?>">
                <button type="button" class="btn btn-light btn-lg"><?= $btn_buttontext ?></button>
              </a>
        </div>
<?php endwhile; ?>
<?php endif; ?>
