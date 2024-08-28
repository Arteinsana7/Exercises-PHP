<?php
function magic8Ball()
{
    do {
        // Prompt the user for a question
        echo "Ask the Magic 8-Ball any yes or no question. The spirits are listening...\n";
        $question = readline(">> ");

        // Print the received question
        echo "You asked: \"$question\"\n";

        // Generate a random integer between 0 and 19
        $choice = rand(0, 19);

        // Uncomment the line below to see the random number for testing
        // echo "Random number generated: $choice\n";

        // Determine the response based on the random number
        switch ($choice) {
            case 0:
                $answer = "It is certain.";
                break;
            case 1:
                $answer = "It is decidedly so.";
                break;
            case 2:
                $answer = "Without a doubt.";
                break;
            case 3:
                $answer = "Yes – definitely.";
                break;
            case 4:
                $answer = "You may rely on it.";
                break;
            case 5:
                $answer = "As I see it, yes.";
                break;
            case 6:
                $answer = "Most likely.";
                break;
            case 7:
                $answer = "Outlook good.";
                break;
            case 8:
                $answer = "Yes.";
                break;
            case 9:
                $answer = "Signs point to yes.";
                break;
            case 10:
                $answer = "Reply hazy, try again.";
                break;
            case 11:
                $answer = "Ask again later.";
                break;
            case 12:
                $answer = "Better not tell you now.";
                break;
            case 13:
                $answer = "Cannot predict now.";
                break;
            case 14:
                $answer = "Concentrate and ask again.";
                break;
            case 15:
                $answer = "Don't count on it.";
                break;
            case 16:
                $answer = "My reply is no.";
                break;
            case 17:
                $answer = "My sources say no.";
                break;
            case 18:
                $answer = "Outlook not so good.";
                break;
            case 19:
                $answer = "Very doubtful.";
                break;
            default:
                $answer = "Error: Invalid choice.";
                break;
        }

        // Print the Magic 8-Ball response
        echo "\nHmm, I see... Your question is \"$question\". I have consulted the spirit world.\n";
        echo "Here is your answer: $answer\n";

        // Ask if the user wants to ask another question
        $continue = readline("Do you want to ask another question? (yes/no): ");
    } while (strtolower($continue) == 'yes');

    echo "Goodbye!\n";
}

// Start the Magic 8-Ball program
magic8Ball();
