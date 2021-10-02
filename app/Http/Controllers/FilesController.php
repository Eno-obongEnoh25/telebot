<?php

namespace App\Http\Controllers;

use App\Models\Bot;
use Illuminate\Http\Request;
use Telegram;
use Telegram\Bot\Laravel\Facades\Telegram as FacadesTelegram;
use Telegram\Bot\FileUpload\InputFile;

class FilesController extends Controller
{
    public function addFile(Request $request)
    {
        $this->validate($request, [

            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'text' => 'required',
        ]);

        $destinationPath = 'public/images/';
        $imageName = time().'_'.$request->file('image')->getClientOriginalName();

        $request->file('image')->move($destinationPath, $imageName);


        Bot::create([

            'imageName' => $imageName,
            'text' => $request->text,
            $text = $request->text,


            Telegram::sendMessage([
                'chat_id'=> env('TELEGRAM_CHAT_ID', ''),
                'parse_mode'=> 'HTML',
                'text' => $text
            ]),

            Telegram::sendPhoto([
                'chat_id'=> env('TELEGRAM_CHAT_ID', ''),
                'photo' => InputFile::createFromContents(\file_get_contents($destinationPath.$imageName), $imageName)
            ]),
        ]);
        return back();

    }

    public function getFile()
    {
        $bots = Bot::get();
        return view('telebot', ['bot' => $bots]);
    }

    public function getUpdates()
    {
        $updates = Telegram::getUpdates();

        dd($updates);
    }
}
