<?php
    // Test Cases
    function change_permissions($file): string
    {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if(empty($extension))
        {
            return "This Is Directory And Only Files Allowed<br>";
        }
        else if($extension != "txt")
        {
            return "File Extension Is Not Txt<br>";
        }
        else
        {
            chmod($file, 0777);
            return "Permissions Changed<br>";
        }

    }
    echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
    echo change_permissions("Work.docx"); // File Extension Is Not Txt
    echo change_permissions("Result.txt"); // Permissions Changed
