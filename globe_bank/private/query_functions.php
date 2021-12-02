<?php

    function find_all_subjects() {
        global $db;

        $sql = "SELECT * FROM subject ";
        $sql .= "ORDER BY position ASC";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }