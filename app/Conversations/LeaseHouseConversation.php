<?php
namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Models\AddLease;

class LeaseHouseConversation extends Conversation
{
    public function askLocation()
    {
        // Fetch all locations from the database
        $locations = AddLease::distinct('location')->get();

        // Create a string with clickable location links
        $locationsString = '';
        $index = 1;
        foreach ($locations as $location) {
            // Generate a URL to the viewsale route with the location's ID
            $locationUrl = route('viewleasing', ['id' => $location->id]);

            // Concatenate the location link with index
            $locationsString .= "<br>{$index}. <a href='{$locationUrl}' target='_blank'>{$location->location}</a><br>";

            // Increment index for the next location
            $index++;
        }

        // Display the clickable location links
        $this->say("Below are the available locations: (Type back to go back)\n{$locationsString}");

        // Ask if the user wants to go back

    }

    public function askBack()
    {
        $this->ask('Do you want to go back?', function (Answer $answer) {
            $response = strtolower($answer->getText());

            if ($response == 'yes') {
                $this->run(); // Go back to the start
            } elseif ($response == 'no') {
                $this->say('Okay, let me know if you need any further assistance.');
            } else {
                $this->say('Sorry, I didn\'t understand that. Please type "yes" or "no".');

            }
        });
    }

    public function run()
    {
        $this->askLocation();
    }
}
