<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function criarFeedback(Request $request)
    {
        $feed = Feedback::create([
            'id_evento' => 2,
            'nota' => 10,
            'comentario' => $request->comentario
        ]);

        if ($feed) {
            return redirect()->route('eventos');
        }

        return abort(403);
    }

    public function listarFeed(int $id)
    {
        $feed = Feedback::find($id);

        return $feed;
    }
}
