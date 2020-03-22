<?php

    function chkIsActive($active) {
        if($active) {
            return "<b class='text-success'>Yes</b>";
        } else {
            return "<b class='text-danger'>No</b>";
        }
    }
?>