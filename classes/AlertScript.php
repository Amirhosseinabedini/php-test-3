<?php

namespace Classes\Alert;


class AlertScript
{
    public static function show($type, $title, $timer = 1500, $showConfirmButton = false)
    {
        echo '
            <script type="text/javascript">
            $(document).ready(function(){
                swal({
                    position: "top-end",
                    type: "' . $type . '",
                    title: "' . $title . '",
                    showConfirmButton: ' . ($showConfirmButton ? 'true' : 'false') . ',
                    timer: ' . $timer . '
                });
            });
            </script>
        ';
    }
}
