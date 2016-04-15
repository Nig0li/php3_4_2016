<?php

namespace App\Commands;

use T4\Console\Command;
use T4\Mail\Sender;

class Notify
    extends Command
{
    public function actionVisitors()
    {
        $mailer = new Sender();
        $sent = $mailer->sendMail('po4ta.rus.63@yandex.ru' ,
            'Количество посещений сайта сегодня',
            'Сегодня на вашем сайте было 5 посетителей');
        $this->writeLn('Verify: ' . $sent);
    }
}