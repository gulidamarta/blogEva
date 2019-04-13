<?php
    $file = file_get_contents("application/view/template.phtml");
    $file_header = file_get_contents("application/view/header.html");
    $file_styles = file_get_contents("application/view/styles.html");
    $file_footer = file_get_contents("application/view/footer.html");

    $file = str_replace('{title}', 'HEALTHY SNACKS', $file);
    $file = str_replace('{header}', $file_header, $file);
    $file = str_replace('{footer}', $file_footer, $file);
    $file = str_replace('{styles}', $file_styles, $file);
    $file = str_replace('{subtitle}', 
      'We all know that feeling when you are kind of hungry but not really. You wouldn’t opt for some substantial meal or even an avo-toast...', $file);
    
    print ($file);
