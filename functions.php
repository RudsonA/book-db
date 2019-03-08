
<?php

function validate($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data);
    return $data;
  }

function read_itOnClick() {
    if ( !empty($_POST['read_it']) && isset($_POST['read_it']) && !empty($_POST['read_author']) && isset($_POST['read_author']) && !empty($_POST['read_des']) && isset($_POST['read_des'])  ) {
        //string validation 
        $read_it = validate($_POST['read_it']);
        $read_author = validate($_POST['read_author']); 
        $read_des = validate($_POST['read_des']); 
        
        //Insert text field
        $sql = "INSERT INTO read_it (book_name, author, descriptions) VALUES ('$read_it', '$read_author', '$read_des')"; 
        
        global $conn;
        $conn -> exec($sql);
    }

}


function wish_to_readOnClick() {
    if ( !empty($_POST['wish_to_read']) && isset($_POST['wish_to_read']) && !empty($_POST['wish_author']) && isset($_POST['wish_author']) && !empty($_POST['wish_des']) && isset($_POST['wish_des']) ) {
        $wish_to_read = validate($_POST['wish_to_read']); 
        $wish_author = validate($_POST['wish_author']); 
        $wish_des = validate($_POST['wish_des']);

    // global $conn; 
    
    //Insert text field
    $sql = "INSERT INTO wish_to_read (book_name, author, descriptions) VALUES ('$wish_to_read', '$wish_author', '$wish_des')";
    
    global $conn; 
    $conn -> exec($sql); 
} 

}



print "<br>"; 

?>