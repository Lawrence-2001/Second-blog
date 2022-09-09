<?php

function print_arr(array $array)
{
    echo ("<pre>");
    var_dump($array);
    echo ("</pre>");
}

function clear_data($data)
{
    return trim(
        stripcslashes(
            htmlspecialchars(
                $data
            )
        )
    );
}

function check_min_length(string $string, int $length): bool
{
    return strlen($string) >= $length;
}

function fill_article_arr(array &$article): array
{
    foreach ($article as $key => &$value) {
        $value['assets'] = clear_data($_POST['article_' . $key]);
    }
    return $article;
}

function check_article_arr(array &$article, array $length = ['title' => 5, 'body' => 15]): array
{
    foreach ($article as $key => &$value) {
        $value['errors']['min_length'] = check_min_length($value['assets'], 5) == true ?: "Минимальная длина должна быть " . $length['title'] . " символов";
    }
    return $article;
}

function split_errors(array $errors): string
{
    $errors_template = array();
    $div = ['start' => '<div>', 'end' => '</div>'];

    foreach ($errors as $key => &$value) {
        $errors_template[] = $div['start'] . $value . $div['end'];
    }
    return implode($errors_template);
}

