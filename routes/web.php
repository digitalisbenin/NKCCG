<?php

use App\Models\User;
use App\Models\Certificate;
use App\Models\Commentaire;
use App\Models\Formation;
use App\Models\Resource;
use App\Models\Chapitre;
use App\Models\Discution;
use App\Models\DiscutionReponse;
use App\Models\Video;
use App\Models\Quiz;


use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DifficuleteController;

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\MesCourController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserResultController;

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\NotequizControleur;
use App\Http\Controllers\QuizController;
use App\Models\Answers;
use App\Models\Notequiz;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/solutions', function () {
    return view('solution');
});
Route::get('/tests', function () {
    return view('tests');
});
Route::get('/contactez', function () {
    return view('contactez');
});
Route::get('/aeronautique', function () {
    return view('aeronautique');
});
Route::get('/automobile', function () {
    return view('automobile');
});
Route::get('/assurance', function () {
    return view('assurance');
});
Route::get('/banque', function () {
    return view('banque');
});
Route::get('/distrubition', function () {
    return view('distrubition');
});
Route::get('/expertise', function () {
    return view('expertise');
});
Route::get('/gestion', function () {
    return view('gestion');
});
Route::get('/a-propos', function () {
    return view('audit');
});
Route::get('/organisations', function () {
    return view('organisations');
});
Route::get('/transition', function () {
    return view('transition');
});
Route::get('/technologie', function () {
    return view('technologie');
});
Route::get('/culture', function () {
    return view('culture');
});
Route::get('/transparence', function () {
    return view('transparence');
});
Route::get('/creation', function () {
    return view('creation');
});
Route::get('/transformation', function () {
    return view('transformation');
});
Route::get('/energie', function () {
    return view('energie');
});
Route::get('/hotelle', function () {
    return view('hotelle');
});
Route::get('/industrie', function () {
    return view('industrie');
});
Route::get('/ingenerie', function () {
    return view('ingenerie');
});
Route::get('/media', function () {
    return view('media');
});
Route::get('/telecommunication', function () {
    return view('telecommunication');
});
Route::get('/techonologieservice', function () {
    return view('techonologieservice');
});
Route::get('/transaction', function () {
    return view('transaction');
});
Route::get('/croissance', function () {
    return view('croissance');
});
Route::get('/startups', function () {
    return view('startups');
});
Route::get('/enjeux', function () {
    return view('enjeux');
});
Route::get('/activites', function () {
    return view('activites');
});
Route::get('/expertises', function () {
    return view('expertises');
});
Route::get('/partenaire', function () {
    return view('partenaire');
});
Route::get('/carriere', function () {
    return view('carriere');
});
Route::get('mescours', function () {
    $formation = Formation::with('chapitres')->get(); 
    return view('mescours',compact('formation'));
});
Route::get('/formation', function () {
    $formation = Formation::with('chapitres')->get();
    return view('formation',compact('formation'));
});
Route::get('/module/{id}', function ($id) {
    $formation = Formation::where('id',$id)->first();
    $chapitre = Chapitre::where('formation_id',$id)->get();
    return view('module',compact('chapitre', 'formation'));
});
Route::get('/mesformation', function () {
    return view('mesformation');
});
Route::get('success', function () {
    return view('success');
});

Route::get('/quiz/{id}', function ($id) {
    $quize = Quiz::all();
    $quiz = Quiz::where('chapitre_id',$id)->with('questions')->get();
    $repose=Answers::all();
    $user = Auth::user();
    $notequiz = Notequiz::where('user_id', $user->id)->get();
    return view('quiz',compact('quiz','quize','repose','notequiz'));
});
Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'store']);
Route::get('/load-cart-data', [App\Http\Controllers\CartController::class, 'create']);


Route::get('/tableau', function () {
    $formation=Formation::all();
    $formations = Formation::orderBy('created_at', 'desc')->take(3)->get();
    $apprenants=User::where('role_id',3)->get();
    $formateurs=User::where('role_id',2)->get();
    $certificate=Certificate::all();
    return view('dashboards',compact('formation','formations','apprenants','formateurs','certificate','apprenants'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/acheter/{id}', function ($id) {
        // $formation = Formation::where('id',$id)->first();
        $chapitre = Chapitre::where('id',$id)->first();
        return view('acheter',compact('chapitre'));
    });

    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
   
    Route::post('/delete-cart-item', [App\Http\Controllers\CartController::class, 'destroy']);
    Route::post('/update-cart', [App\Http\Controllers\CartController::class, 'update']);

    Route::post('user-results', [UserResultController::class, 'store']);
    Route::get('user-resultes', [UserResultController::class, 'indexe']);
    Route::get('recapulatives', [NotequizControleur::class, 'indexe']);


Route::get('/certificate/download/{chapterId}', [CertificateController::class, 'download'])->name('certificate.download');


/*-----------------Evaluation--------------------------*/
Route::get('evaluations', [EvaluationController::class, 'index']);
Route::get('create-evaluations', [EvaluationController::class, 'create']);
Route::get('evaluations/{id}', [EvaluationController::class, 'show']);
Route::get('evaluations/{id}', [EvaluationController::class, 'edit']);
Route::post('evaluations', [EvaluationController::class, 'store']);
Route::put('evaluations/{id}', [EvaluationController::class, 'update']);
Route::get('evaluations/{id}', [EvaluationController::class, 'destroy']);


/*-----------------Formation--------------------------*/
Route::get('formations', [FormationController::class, 'index']);
Route::get('create-formations', [FormationController::class, 'create']);
Route::get('formations/{id}', [FormationController::class, 'show']);
Route::get('formations/{id}/edit', [FormationController::class, 'edit']);
Route::post('formations', [FormationController::class, 'store']);
Route::put('formations/{id}/update', [FormationController::class, 'update']);
Route::get('formations/{id}/destroy', [FormationController::class, 'destroy']);

/*-----------------Mes cours--------------------------*/
Route::get('mes-cours', [MesCourController::class, 'index']);
Route::get('create-mes-cours', [MesCourController::class, 'create']);
Route::get('mes-cours/{id}', [MesCourController::class, 'show']);
Route::get('mes-cours/{id}', [MesCourController::class, 'edit']);
Route::post('mes-cours', [MesCourController::class, 'store']);
Route::put('mes-cours/{id}', [MesCourController::class, 'update']);
Route::get('mes-cours/{id}', [MesCourController::class, 'destroy']);

Route::get('categories', [CategoryController::class, 'index']);
Route::get('create-categories', [CategoryController::class, 'create']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('categories', [CategoryController::class, 'store']);
Route::put('categories/{id}/update', [CategoryController::class, 'update']);
Route::get('categories/{id}/destroy', [CategoryController::class, 'destroy']);


/*-----------------Certificate--------------------------*/
Route::get('certificates', [CertificateController::class, 'index']);
Route::get('create-certificates', [CertificateController::class, 'create']);
Route::get('certificates/{id}', [CertificateController::class, 'show']);
Route::get('certificates/{id}', [CertificateController::class, 'edit']);
Route::post('certificates', [CertificateController::class, 'store']);
Route::put('certificates/{id}', [CertificateController::class, 'update']);
Route::get('certificates/{id}', [CertificateController::class, 'destroy']);


/*-----------------Chapitre--------------------------*/
Route::get('chapitres', [ChapitreController::class, 'index']);
Route::get('chapitres/{id}', [ChapitreController::class, 'indexe']);
Route::get('create-chapitres/{id}', [ChapitreController::class, 'create']);
Route::get('chapitres/{id}', [ChapitreController::class, 'show']);
Route::get('chapitres/{id}/edit', [ChapitreController::class, 'edit']);
Route::post('chapitres', [ChapitreController::class, 'store']);
Route::put('chapitres/{id}/update', [ChapitreController::class, 'update']);
Route::get('chapitres/{id}/destroy', [ChapitreController::class, 'destroy']);

/*-----------------Commentaire--------------------------*/
Route::get('commentaires', [CommentaireController::class, 'index']);
Route::get('create-commentaires', [CommentaireController::class, 'create']);
Route::get('commentaires/{id}', [CommentaireController::class, 'show']);
Route::get('commentaires/{id}', [CommentaireController::class, 'edit']);

Route::put('commentaires/{id}', [CommentaireController::class, 'update']);
Route::get('commentaires/{id}', [CommentaireController::class, 'destroy']);

/*-----------------Difficulte--------------------------*/
Route::get('difficultes', [DifficuleteController::class, 'index']);
Route::get('create-difficultes', [DifficuleteController::class, 'create']);
Route::get('difficultes/{id}/edit', [DifficuleteController::class, 'edit']);
Route::post('difficultes', [DifficuleteController::class, 'store']);
Route::put('difficultes/{id}/update', [DifficuleteController::class, 'update']);
Route::get('difficultes/{id}/destroy', [DifficuleteController::class, 'destroy']);



/*-----------------Ansers --------------------------*/
Route::get('answers', [AnswersController::class, 'index']);
Route::get('create-answers', [AnswersController::class, 'create']);
Route::get('create-answers/{id}', [AnswersController::class, 'creates']);
Route::get('create-answer/{id}', [AnswersController::class, 'createe']);
Route::get('answers/{id}', [AnswersController::class, 'show']);
Route::get('answers/{id}/edit', [AnswersController::class, 'edit']);
Route::post('answers', [AnswersController::class, 'store']);
Route::put('answers/{id}/update', [AnswersController::class, 'update']);
Route::get('answers/{id}/destroy', [AnswersController::class, 'destroy']);

/*-----------------Video--------------------------*/
Route::get('questions', [QuestionController::class, 'index']);
Route::get('create-question/{id}', [QuestionController::class, 'createe']);
Route::get('create-questions/{id}', [QuestionController::class, 'create']);
Route::get('create-questions', [QuestionController::class, 'creates']);
Route::get('questions/{id}', [QuestionController::class, 'show']);
Route::get('questions/{id}/edit', [QuestionController::class, 'edit']);
Route::post('questions', [QuestionController::class, 'store']);
Route::put('questions/{id}/update', [QuestionController::class, 'update']);
Route::get('questions/{id}/destroy', [QuestionController::class, 'destroy']);


/*-----------------Video--------------------------*/
Route::get('quizs', [QuizController::class, 'index']);
Route::get('create-quizs/{id}', [QuizController::class, 'create']);
Route::get('create-quizzs/{id}', [QuizController::class, 'creates']);
Route::get('quizs/{id}', [QuizController::class, 'show']);
Route::get('quizse/{id}', [QuizController::class, 'shows']);
Route::get('quizs/{id}/edit', [QuizController::class, 'edit']);
Route::post('quizs', [QuizController::class, 'store']);
Route::put('quizs/{id}/update', [QuizController::class, 'update']);
Route::get('quizs/{id}/destroy', [QuizController::class, 'destroy']);




/*-----------------Video--------------------------*/
Route::get('notequizs', [NotequizControleur::class, 'index']);
Route::get('create-notequizs/{id}', [NotequizControleur::class, 'create']);
Route::get('create-notequizs/{id}', [NotequizControleur::class, 'creates']);
Route::get('notequizs/{id}', [NotequizControleur::class, 'show']);
Route::get('notequizs/{id}/edit', [NotequizControleur::class, 'edit']);
Route::post('notequizs', [NotequizControleur::class, 'store']);
Route::put('notequizs/{id}/update', [NotequizControleur::class, 'update']);
Route::get('notequizs/{id}/destroy', [NotequizControleur::class, 'destroy']);

});

require __DIR__.'/auth.php';



