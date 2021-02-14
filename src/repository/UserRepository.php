<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT users.email,users.password,user_details.name,user_details.surname
            FROM public.users inner join user_details on users.id_user_details = user_details.id
            WHERE users.email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function addUser(User $user)
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO user_details (name, surname, phone)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getPhone()
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.users (email, password, id_user_details, created_at)
            VALUES (?, ?, ?, ?)
        ');
        $stmt->execute([
            $user->getEmail(),
            password_hash($user->getPassword(),PASSWORD_BCRYPT),
            $this->getUserDetailsId($user),
            $date->format('Y-m-d')
        ]);
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user_details WHERE name = :name AND surname = :surname AND phone = :phone
        ');
        $name = $user->getName();
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $surname = $user->getSurname();
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $phone = $user->getPhone();
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }
}