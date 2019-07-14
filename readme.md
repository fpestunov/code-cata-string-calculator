# String Calculator

## Условия задачи

https://osherove.com/tdd-kata-1

Текстовая строка вида "1,2,7". Необходимо посчитать сумму чисел. Сумма равна 10.

Числа больше 1000, отбрасываем.

Перенос строки обрабатываем "1,3\n2" => 6.

## Начало

- создаем `composer.json`
- `composer install`
- создаем класс тестирования Боулинг `vendor\bin\phpspec describe StringCalculator`
- запускаем тест `vendor\bin\phpspec run` и создаем класс приложения

## Приступаем к разработке

- начинаем с простого - пустая строка означает 0, пишем тест, работает.
- тест для 1 числа, переписываем метод, работает.
- тест для 2 чисел `it_finds_the_sum_of_two_number()`, тест не работает :(... переписываем метод, работает! и добавляем тест `it_finds_the_sum_of_any_amount_numbers()`.
- делаем проверку на недопустимые числа `it_disallows_negative_numbers()`, переписываем метод, тест работает.
- тест на `it_ignores_any_number_that_is_one_thousand_or_greater()` на большие числа, тест работает.
- `it_allows_for_new_line_delimeter()`, пишем код, тест работает.
- перепишем тест `it_disallows_negative_numbers()`, чтобы выдавал текстовую ошибку.
