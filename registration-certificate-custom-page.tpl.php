<?php
  $name = 'registration_certificate_user_profile';
  $display_id = 'panel_pane_registration_certificate_user_profile';
  $view_object = views_get_view($name);
  $view_object->set_display($display_id);
  $view_object->pre_execute();
  $view_object->execute();
  $output = $view_object->render();

  print $output;
?>
