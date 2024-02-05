<?php

function getCategory(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from categories where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function getCategories() : array
{
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}

