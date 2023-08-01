<?php

use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class . '@startConversation');
$botman->hears('Terra', function ($bot) {
    $bot->reply("Terra là được phát triển bởi CÔNG TY TNHH VINA PAYROLL OUTSOURCING – thành viên của tập đoàn I-GLOCAL, terra là Nhóm giải pháp quản trị nhân sự toàn diện cho doanh nghiệp với đa dạng các dịch vụ, nhằm hỗ trợ tối đa cho phòng nhân sự của các doanh nghiệp tại Việt Nam.");
});

$botman->hears('Tăng ca', function ($bot) {
    $bot->reply('Bạn muốn tạo tăng ca ngày nào?');
});

$botman->fallback(function ($bot) {
    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
});
