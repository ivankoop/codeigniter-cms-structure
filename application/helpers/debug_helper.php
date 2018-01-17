<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function console_log( $data ) {
    $output = json_encode($data);

    echo "<script>
      var debug_data = ".$output .";
      console.log(debug_data);
    </script>";

    //TODO: implementar logica para logs file.
    //log_message('ERROR', $output);
}
