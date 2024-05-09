<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\BuyHouseConversation;
use App\Conversations\LeaseHouseConversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use Illuminate\Support\Facades\Cache;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
class BotManController extends Controller
{
    /**
     * Handle incoming messages and trigger appropriate responses.
     */
    public function handle()
    {
        $botman = app('botman');
        $backButton = Button::create('Yes')->value('back');
        // Handle greeting and introduction
        $botman->hears(['hello', 'hey', 'hi'], function (BotMan $bot) use ($backButton) {
            $bot->typesAndWaits(1);

            $question = Question::create('Hello! How can I assist you today?')
                ->addButton(Button::create('Buy')->value('buy'))
                ->addButton(Button::create('Lease')->value('lease'))
                ->addButton(Button::create('Inquiries')->value('inquiries'));


            $bot->reply($question);
        });




        // Global back button handler
        $botman->hears('back', function ($bot) use ($backButton) {
            $bot->typesAndWaits(1);
            $question = Question::create('Welcome back! How can I assist you today?')
                ->addButton(Button::create('Buy')->value('buy'))
                ->addButton(Button::create('Lease')->value('lease'))
                ->addButton(Button::create('Inquiries')->value('inquiries'));

            $bot->reply($question);
        });
        $botman->hears('buy', function ($bot) use ($backButton) {
            $bot->typesAndWaits(1);
            $bot->startConversation(new BuyHouseConversation());
            $bot->reply(Question::create('Do you want to go back?')->addButton($backButton));
        });

        $botman->hears('lease', function ($bot) use ($backButton) {
            $bot->typesAndWaits(1);
            $bot->startConversation(new LeaseHouseConversation());
            $bot->reply(Question::create('Do you want to go back?')->addButton($backButton));
        });
        // Handle inquiries
        $botman->hears('inquiries', function ($bot) use ($backButton) {
            $bot->typesAndWaits(1);
            $bot->reply('Please visit our website to explore available properties or click "buy" or "lease" to get started.');
            $bot->reply(Question::create('Do you want to go back?')->addButton($backButton));
        });
        // Fallback for handling unexpected user input
        $botman->fallback(function ($bot) {
            $bot->typesAndWaits(1);
            $bot->reply("I'm sorry, I didn't understand that. Please type 'buy', 'lease', or 'inquiries'.");
        });

        // Integration of provided code snippet
        $botman->hears('back', function ($bot) {
            $bot->typesAndWaits(1);
        });

        $botman->listen(); // Listen for incoming messages
    }
}
