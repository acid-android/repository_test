<?php
return [
  'db' => [
      'PDO' => [
          'dsn' => 'mysql:host=localhost;port=3306;dbname=repository;charset=utf8',
          'user' => 'root',
          'password' => '',
          'options' => [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          ],

      ],
      'mongoDB' => [

      ],
  ]
];