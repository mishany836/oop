<?php
// ПРОВЕРКА ИСКЛЮЧЕНИЙ
namespace My;
//Пространство имен это область определения функций классов констант имен
// ограничивающая область их видимости
// и предоставляющаяя возможность группировать их логически между собой
class User
{
    public  $login;
    public  $password;
    protected $mysql;
    public function __construct($mysql, $login, $password)
    {
       if(strLen($login) < 3 || strLen($login) > 10){
            throw new \Exception('Неправильный логин');

         }
        if(strLen($password) < 3 || strLen($password) > 10){
            throw new \Exception('Неправильный пароль');

        }
        $this->mysql = $mysql;
        $this->login = $login;
        $this->password = $password;

    }

    /**
     * Добавления пользователя
     * @return mixed
     */
    public function addUser()
    {
        $sql = "'INSERT INTO `users` SET `login` = '" . $this->login ."' , `password` = '" . $this->password . "''";
        return $this->mysql->query($sql);
    }

    /**
     * Удаление пользователя
     * @param $id
     * @return mixed
     */
public function delete($id)
{
    $sql = "DELETE FROM `users` WHERE `id` = " . intval($id);
    return$this->mysql->query($sql);
}
public function apdate($id, $arData = [])
{
    if(!empty($arData)){
        $sql = "UPDATE `users` SET ";
        $c = 0;
        foreach ($arData as $k => $val){
            $sql .= "`{$k}` = '{$val}' ";
            $c++;

            if ($c < count($arData)){
                $sql .= ", ";
            }
        }
        $sql .= "WHERE `id` = " . intval($id);

        return $sql;
        return $this->mysql->query($sql);
    }
    }
    public function getAll()
    {

    }
    public function getById($id)
    {

    }
}
/*
try {
    $user = new User('Lowwweeeyyyy', 12121212);
    echo $user->addUser();
}catch (\Exception $e){
    echo $e->getMessage();
}

//Исключения явл спец условиями обычно в случае ошибки,которые проявляются или могут быть спец созданы программой
// Создаются для обработки искл ситуаций
//стандартный класс Exception
// throw - бросать
// try - ловить
// catch - перехватывает исключения
*/

