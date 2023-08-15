<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
            $datae = array();
            $datae[] = array(
                'Name' => $_POST['name'],
                'Branch' => $_POST['branch'],
                'Regno' => $_POST['regno'],
                'Phone' => $_POST['phone'],
                'Pref1' => $_POST['pref1'],
                'Pref2' => $_POST['pref2'],
                'Pref3' => $_POST['pref3'],

            );
            return json_encode($datae);
        }
          
        $name = "applications";
        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                echo $file_name .' file created';
            }
        else {
            echo 'There is some error';
        }
    }
?>
