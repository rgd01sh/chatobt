use App\Http\Controllers\ChatController;

Route::get('/chat', [ChatController::class, 'index']);
Route::post('/sendMessage', [ChatController::class, 'sendMessage']);
Route::post('/get_user_for_conversation', [ChatController::class, 'getUserForConversation']);
Route::post('/retrieveChatMessages', [ChatController::class, 'retrieveChatMessages']);
