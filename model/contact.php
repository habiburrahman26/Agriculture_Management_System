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
    } else {
        return false;
    }

}

function getMessagegById( $id ) {
    $conn = getConnection();
    $sql = "select * from contact where $id = '{$id}'";
    $result = mysqli_query( $conn, $sql );
    $row = mysqli_fetch_assoc( $result );
    return $row;
}

function getAllProduct() {
    $conn = getConnection();
    $sql = "select * from products";
    $result = mysqli_query( $conn, $sql );
    $products = [];

    while ( $row = mysqli_fetch_assoc( $result ) ) {
        array_push( $products, $row );
    }

    return $products;
}

function getProductById( $id ) {
    $conn = getConnection();
    $sql = "select * from products where id = '{$id}'";
    $result = mysqli_query( $conn, $sql );
    $row = mysqli_fetch_assoc( $result );
    return $row;
}

function deleteProduct( $id ) {
    $conn = getConnection();
    $sql = "delete from products where id = '{$id}'";
    if ( mysqli_query( $conn, $sql ) ) {
        return true;
    } else {
        return false;
    }

}

function updateProduct( $id, $name, $desc, $price, $quantity ) {
    $conn = getConnection();
    $sql = "update products set name = '{$name}', description='{$desc}', price='{$price}',
            quantity='{$quantity}' where id ='{$id}'";

    if ( mysqli_query( $conn, $sql ) ) {
        return true;
    }else{
        return false;
    }
}

?>