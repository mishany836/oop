<?php

class User
{
    public $login;
    public $password;
    protected $mysql;

    public function __construct(mysqli $mysql, $login, $password)
    {
        $this->mysql = $mysql;
        $this->login = $login;
        $this->password = $password;

        /*if(strLen($login) < 3 || strLen($login) > 10){
             throw new \Exception('Неправильный логин');

          }
         if(strLen($password) < 3 || strLen($password) > 10){
             throw new \Exception('Неправильный пароль');

         }
        */

    }

    /**
     * Добавления пользователя
     * @return mixed
     */
    public function addUser()
    {
        $sql = "INSERT INTO `users` SET `login` = '" .$this->login. "', `password` = '" . $this->password . "'";
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

    /**
     * Редактирование пользователя
     * @param $id
     * @param array $arData
     * @return string
     */
    public function update($id, $arData = [])
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
        $sql .= " WHERE `id` = " . intval($id);


        return $this->mysql->query($sql);
        }
    }

    /**
     * возвращает всех пользователей
     */
public function getAll()
{

}

    /**
     * возвращает пользователя по  id
     * @param $id
     */
public function getById($id)
{

}
}
// CRUD - creat , ,update , delete
/*
try {
    $user = new User('users', 'lowww', 1232134);
    echo $user->addUser();

}catch (Exception $e){
    echo $e->getMessage();
}
*/
//Исключения - явл. спец. условиями (обычно в случае ошибки),которые проявляются или могут быть спец. созданы программой
// Создаются для обработки исключительных ситуаций.

//стандартный класс - Exception

// throw - бросать
// try - ловить
// catch - перехватывает исключения(ловит) блоков catch- может быть несколько


// ПРОВЕРКА ИСКЛЮЧЕНИЙ

//Пространство имен это область определения функций классов констант имен
// ограничивающая область их видимости
// и предоставляющаяя возможность группировать их логически между собой