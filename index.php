<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once __DIR__ . '/lineBot.php';
//inisiasi
$bot = new Linebot();
$text = $bot->getMessageText();
$follow = $bot->getFollowEvent();

//this will reply in chatbot
//$bot->reply($text);

if($text == 'start') {  
    $json = file_get_contents('https://opentdb.com/api.php?amount=10');
    $obj = json_decode($json);
    $bot->reply($obj->results[1]->question);
} 

if($text == 'getuser') {
    $bot->reply($bot->getUserId());
}

if($text == 'follow') {
    $bot->reply($bot->follow());
}