<?php

$board = [
    ["","",""],
    ["","",""],
    ["","",""],
];


function boardLayout($board): string
{
    $output = "";
    for ($x = 0; $x < 3; $x++) {
        for ($y = 0; $y < 3; $y++) {
            $output .= $board[$x][$y] ?: '_';
            if ($y != 2) {
                $output .= '|';
            }
            if ($y == 2) {
                $output .= "\n";
            }
        }
    }
    return $output;
}

function playerMove(string $player): array
{
    $coordinates = readline("$player pick a coordinate 1-9: ");
    return match(true) {
        $coordinates === '2' => [0, 1],
        $coordinates === '3' => [0, 2],
        $coordinates === '4' => [1, 0],
        $coordinates === '5' => [1, 1],
        $coordinates === '6' => [1, 2],
        $coordinates === '7' => [2, 0],
        $coordinates === '8' => [2, 1],
        $coordinates === '9' => [2, 2],
        default => [0, 0]
    };
}

function game($board): void
{
    echo boardLayout($board);
    $move = playerMove('X');
    $X = 'X';
    forEach ($playerMove as $move => $X) {
        $board[$move[0]][$move[1]] = $X;
}
//    $move = playerMove('X');
//    $board[$move[0]][$move[1]] = 'X';
//    echo boardLayout($board);
//
//    $move = playerMove('O');
//    $board[$move[0]][$move[1]] = 'O';
//    echo boardLayout($board);
//
//    $move = playerMove('X');
//    $board[$move[0]][$move[1]] = 'X';
//    echo boardLayout($board);
//
//    $move = playerMove('O');
//    $board[$move[0]][$move[1]] = 'O';
//    echo boardLayout($board);
//
//    $move = playerMove('X');
//    $board[$move[0]][$move[1]] = 'X';
//    echo boardLayout($board);
//
//    $move = playerMove('O');
//    $board[$move[0]][$move[1]] = 'O';
//    echo boardLayout($board);
//
//    $move = playerMove('X');
//    $board[$move[0]][$move[1]] = 'X';
//    echo boardLayout($board);
//
//    $move = playerMove('O');
//    $board[$move[0]][$move[1]] = 'O';
//    echo boardLayout($board);
//
//    $move = playerMove('X');
//    $board[$move[0]][$move[1]] = 'X';
//    echo boardLayout($board);

}

game($board);



