<?php

/**
 * This could be moved to the websend_inc folder and supplied with the required
 * config if we decided to make a in-game function out of it
 */

// we want to have a fixed, unique ID for every FAQ to be able to link to it
// we can have several categories
$FAQ = array(
    1 => array(
        'question' => 'I built something amazing for the city! Can you copy it over?',
        'answer' => 'Do not build something because you think the city needs it. Do not ask me to copy things because “you built it for the city”.
            Specially not if it took you 30 minutes to build it. If you want your stuff to be seen, post it on the forum.
            If I think the city needs it, I will copy it.',
        'categories' => array('building', 'worlds'),
    ),
    2 => array(
        'question' => 'I want to change my Minecraft Username. What do I have to do?',
        'answer' => '1) remove all your inventory from your body in all worlds – deposit it or put it into normal chests, not ender chests
            2) Remove all your contents from all ender chests in all worlds
            3) Use your XP, it will be gone, too
            4) Log off from the website and the game
            5) change your name with mojang
            6) Login at the game
            7) Login at the website
            8) check if the “welcome” message on the website changed',
        'categories' => array('account'),
    ),
    3 => array(
        'question' => 'How can I have more lots? I need more space!',
        'answer' => 'If you are settler, you can either buy kingdom lots or build in the darklands.
            To get more space in other worlds, please see the bottom of <a href="http://uncovery.me/about-this-server/user-levels/">this page</a>.',
        'categories' => array('userlevels', 'lots', 'account'),
    ),
    4 => array(
        'question' => 'I would like to have a notice/sign board in spawn or elsewhere in-game with rules, ads, information, whatever.',
        'answer' => 'Sorry, this will not happen. I have enough to do keeping the website up to date with stuff. Also, writing/editing the in-game signs is a really big pain.
            I do not want to do that. Also, I do not want that people rely on several places to find info. If you have one watch, you know the time.
            If you have two, you never know which one is correct.',
        'categories' => array('in-game', 'rules', 'website'),
    ),
    5 => array(
        'question' => 'I need something but cannot find it. Can you sell it to me?',
        'answer' => 'No. I only sell a limited number of items that are difficult to obtain, which you can see in the shop when you type “/list uncovery”. I do not buy anything. Don\’t ask for it.',
        'categories' => array('in-game', 'blocks'),
    ),
    6 => array(
        'question' => 'I won’t be online for some time, will you delete my stuff?',
        'answer' => 'Yes. If you do not login on the server for some time, your lot will expire. The normal lot expiry time is 1 month after your last login. IF you want to extend your leave, you can donate.',
        'categories' => array('account', 'lots'),
    ),
    7 => array(
        'question' => 'I got bored with my protected lot and would like to restart from scratch, can you reset my lot? Or can I switch from Empire to Flatlands?',
        'answer' => 'No. If I start doing this, I will have people migrating from one lot to the other and I have all the work.
            You select a lot, you keep it. I allow people to switch from Flatlands to Empire as an exception, but only in one way – once.
            I cannot keep track of people switching forward and backward. Every switch is work for me, and I have better things to do than to deal with your indecisiveness.',
        'categories' => array('lots', 'worlds'),
    ),
    8 => array(
        'question' => 'Can you enable the /item command for certain people? Can you give out free items/blocks etc?',
        'answer' => 'No. You chose to build in a survival map, then you build with survival tools. People mine, and build from what they mine.
            If you are not fine with that, You should have picked a flatlanbds lot.',
        'categories' => array('blocks', 'commands'),
    ),
    9 => array(
        'question' => 'Can you give us Worldedit Commands?',
        'answer' => 'No. Worldedit is unable to respect lot protection and  it is VERY easy to crash a server abusing worldedit.
            The only exception are for Elders in the draftlands.',
        'categories' => array('commands'),
    ),
    10 => array(
        'question' => 'How long until you make a new/ reset the map of world X?',
        'answer' => 'Well if all goes well, never. We only reset maps if the biomes change dramatically.
            But even then. we only reset empty lots and allow people to reset their lots on demand. This excludes the kingdom.
            If there are new blocks, we just reset the darklands so you can mine them there',
        'categories' => array('worlds'),
    ),
    11 => array(
        'question' => 'Can you reset the nether? I cannot find any glowstone around the spawn!',
        'answer' => 'No, I will not. It’s a survival game. The nether does not have a size limitation. You can walk out far and find tons of glowstone.
            The only exception is when an update introduces new terrain generation in the nether, as happened with 1.5 and beta 1.8.',
        'categories' => array('worlds'),
    ),
    12 => array(

    ),
);

function umc_faq_web() {



}
