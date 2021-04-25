<?php

require_once 'db.php';

function getContact() {

    $conn = getConnection();
    $sql = "select * from contact";
    $result = mysqli_query( $conn, $sql );
    $contacts = [];

    while ( $row = mysqli_fetch_assoc( $result ) ) {
        array_push( $contacts, $row );
    }

    return $contacts;
}

function updateStatus( $id ) {
    $conn = getConnection();
    $sql = "update contact set status = 'fixed'";

    if ( mysqli_query( $conn, $sql ) ) {
        return true;
    }else{
        return false;
    }

}

function getMessagegById($id){
    $conn = getConnection();
    $sql = "select * from contact where $id = '{$id}'";
    $result = mysqli_query( $conn, $sql );
    $row = mysqli_fetch_assoc( $result );
    return $row;
}

?>