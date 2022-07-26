<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestMail extends Mailable
{
    use Queueable, SerializesModels;
    
    private Request $request;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->request->all();
        
        $message = isset($data['name']) ? 'Имя: ' . $data['name'] . '<br>' : '';
        $message .= isset($data['phone']) ? 'Номер телефона: ' . $data['phone'] . '<br>' : '';
        $message .= isset($data['style']) ? 'Стиль дизайна: ' . $data['style'] . '<br>' : '';
        $message .= isset($data['management']) ? 'Доверительное управление: ' . $data['management'] . '<br>' : '';
        $message .= isset($data['city']) ? 'Город: ' . $data['city'] . '<br>' : '';
        $message .= isset($data['rooms']) ? 'Кол-во комнат: ' . $data['rooms'] . '<br>' : '';
        $message .= isset($data['message']) ? 'Сообщение: ' . $data['message'] . '<br>' : '';
        
        return $this->from('from@commercrealhome.ru', 'CommercrealHome')
                    ->html($message);
    }
}
