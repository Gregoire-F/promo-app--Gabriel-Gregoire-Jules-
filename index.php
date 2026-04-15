<?php

require_once "bootstrap.php";

$studentsRepository = $entityManager->getRepository('PromoAppGabrielGregoireJules\Modele\Student');
$students = $studentsRepository->findAll();

$loader = new \Twig\Loader\FilesystemLoader('templates'); // définit le rep de stockage des fichiers Twig
$twig = new \Twig\Environment($loader); // crée un objet Twig
echo $twig->render('index.html.twig', ['students' => $students]);