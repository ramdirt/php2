<?php

// 3. Дан код:

class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4

// Что он выведет на каждом шаге? Почему?
// Статичная переменная делает метод неразмножаемым и при каждом вызове метода у разных объектов происходит обращение к одному и тому же свойству, по этому значение переменной увеличивается



// Немного изменим п.5:

class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A
{
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2

// 4. Объясните результаты в этом случае.
// В продолжению к прошлому объяснению, в этом случае наследование делает возможным размножение метода



// 5. *Дан код:

class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A
{
}
$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo(); 

// Что он выведет на каждом шаге? Почему?
// Тут совсем не понял что изминилось с прошлого примера, только по другому инициализированы классы, но это нормально если классу ненужны переменные