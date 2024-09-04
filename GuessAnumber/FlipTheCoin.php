<?php

$play_count = 0;
$correct_guesses = 0;
$guess_heads = 0;
$guess_tails = 0;

echo "Let's flip a coin! Can you guess whether it will be heads or tails?\n";

function flipCoin()
{
    global $guess_heads, $guess_tails, $correct_guesses, $play_count;

    $play_count++;
    $flip = rand(0, 1); // 0 for heads, 1 for tails

    // Get user input and standardize to lowercase
    echo "\nMake your guess (heads/tails)...\n";
    $guess = strtolower(trim(readline(">> ")));

    // Determine the outcome of the flip
    $flip_result = ($flip === 0) ? "heads" : "tails";

    echo "Round $play_count\nCoin Flip: $flip_result\nYour Guess: $guess\n";

    // Track user's guess statistics
    if ($guess === "heads") {
        $guess_heads++;
    } elseif ($guess === "tails") {
        $guess_tails++;
    }

    // Check if the user's guess was correct
    if ($guess === $flip_result) {
        $correct_guesses++;
        echo "Congratulations! You guessed correctly.\n";
    } else {
        echo "Sorry, you guessed wrong.\n";
    }
}

// Call the function 10 times
for ($i = 0; $i < 10; $i++) {
    flipCoin();
}

// Calculate the percentage of correct guesses
$percent_correct = ($correct_guesses / $play_count) * 100;


echo "\nAfter $play_count rounds, here are some facts about your guessing:\n";
echo "You guessed correctly $percent_correct% of the time.\n";

// Additional analysis
if ($guess_heads > $guess_tails) {
    echo "You guessed 'heads' more often.\n";
} elseif ($guess_tails > $guess_heads) {
    echo "You guessed 'tails' more often.\n";
} else {
    echo "You guessed 'heads' and 'tails' an equal number of times.\n";
}
