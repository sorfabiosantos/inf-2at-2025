<?php

require "connection.php";

$query = "SELECT doctors.id, doctors.name, doctors.crm, specialities.name as specialty 
          FROM doctors
          JOIN specialities ON doctors.specialty_id = specialities.id
          WHERE specialty_id = :specialty_id";