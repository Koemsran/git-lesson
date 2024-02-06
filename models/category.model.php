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

function updateCategory(string $name, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update categories set name = :name, description = :description where id = :id");
    $statement->execute([
        ':name' => $name,
        ':description' => $description,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}
function deleteCategory(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}
