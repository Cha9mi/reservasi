<?php
// Menginclude file koneksi.php
include 'koneksi.php';

// Session Start
session_start();

//  hapus data yang telah disubmit
$id = $_GET['id'];
$query = "DELETE FROM janji_temu WHERE id=$id";
$sql = mysqli_query($conn, $query);

header("Location: crudReservasi.php");