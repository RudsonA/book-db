
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

function readDeleteOnClick() {
    if ( !empty($_POST['readID']) && isset($_POST['readID']) ) {
        $readID = validate($_POST['readID']); 

        $sql = "DELETE FROM read_it WHERE id='$readID'"; 

        global $conn;
        $conn -> exec($sql); 
    }
}

function wishDeleteOnClick() {
    if ( !empty($_POST['wishID']) && isset($_POST['wishID']) ) {
        $wishID = validate($_POST['wishID']); 

        $sql = "DELETE FROM wish_to_read WHERE id='$wishID'";

        global $conn;
        $conn -> exec($sql); 
    }
}

function updateOnClick() {
    if( !empty($_POST['read_update']) && isset($_POST['read_update']) ) {
        $update = validate($_POST['read_update']);

        $sql = "INSERT INTO read_it (id, book_name, author, descriptions)SELECT id, book_name, author, desciptions FROM wish_to_read WHERE id='$update'"; 

        global $conn;
        $conn -> exec($sql); 
    }
}

print "<br>"; 

?>