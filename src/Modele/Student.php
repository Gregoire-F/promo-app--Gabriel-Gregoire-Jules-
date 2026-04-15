<?php

namespace PromoAppGabrielGregoireJules\Modele;

use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'students')]
class Student {
#[ORM\Id]
#[ORM\Column(type: 'integer')]
#[ORM\GeneratedValue]
private $id;
#[ORM\Column(type: 'string')]
private $name;
#[ORM\Column(type: 'integer')]
private $age;
#[ORM\Column(type: 'string')]
private $bio;

public function delete($entityManager) {
$entityManager->remove($this);
$entityManager->flush();
}
public function getName() {
return $this->name;
}
public function setName($name): void {
$this->name = $name;
}
public function setAge($age): void {
$this->age = $age;
}
public function getAge() {
return $this->age;
}
public function getBio() {
return $this->bio;
}
public function setBio($bio): void {
$this->bio = $bio;
}
public function getId() {
return $this->id;

}
}