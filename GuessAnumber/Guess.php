<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber()
{
    global $guess_high, $guess_low, $correct_guesses, $play_count;
    $play_count++;
    $num = rand(1, 10);
    echo "\nMake your guess...\n";
    $guess = intval(readline(">> "));
    echo "Round $play_count\nMy Number: $num\nYour guess: $guess";

    if ($guess === $num) {
        $correct_guesses++;
    } elseif ($guess > $num) {
        $guess_high++;
    } else {
        $guess_low++;
    }
}

// Call the function 10 times
for ($i = 0; $i < 10; $i++) {
    guessNumber();
}

// Calculate the percentage of correct guesses
$percent_correct = ($correct_guesses / $play_count) * 100;
echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

// Additional analysis
if ($guess_high > $guess_low) {
    echo "When you guessed wrong, you tended to guess high.\n";
} elseif ($guess_low > $guess_high) {
    echo "When you guessed wrong, you tended to guess low.\n";
}
