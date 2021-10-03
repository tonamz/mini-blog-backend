<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Resources\ArticlesResource;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /*
    |--------------------------------------------------------------------------
    | Add new Articles
    |--------------------------------------------------------------------------
     */
    public function addArticle(Request $request){
        // Validator field
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required|numeric',
            'content' => 'required',
            'category' => 'required|numeric',
        ]);

        //Create article
        $article = Articles::create([
            'name' => $request->name,
            'status' => $request->status,
            'content' => $request->content,
            'category' => $request->category,
            'author' => $request->auth->id,
        ]);

        return $this->responseRequestSuccess($article);
    }

    /*
    |--------------------------------------------------------------------------
    | Edit Articles
    |--------------------------------------------------------------------------
     */
    public function editArticle(Request $request){
        // Validator
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required|numeric',
            'content' => 'required',
            'category' => 'required|numeric',
        ]);

        $article = Articles::where('id',  $request->id)->first();

        //Check author of article
        if(!empty($article) && $article->author == $request->auth->id){
            //Edit article
            $article->update([
                'name' => $request->name,
                'status' => $request->status,
                'content' => $request->content,
                'category' => $request->category,
            ]);

            return $this->responseRequestSuccess($article);
        }elseif(empty($article)){
            return $this->responseRequestError("Article not Found");
        }else{
            return $this->responseRequestError("Unauthorized");
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Article
    |--------------------------------------------------------------------------
     */
    public function deleteArticle(Request $request){

        $article = Articles::where('id',  $request->id)->first();

        //Check author of article
        if(!empty($article) && $article->author == $request->auth->id){
            //Delete article
            $article->delete();
            return $this->responseRequestSuccess($article);
        }elseif(empty($article)){
            return $this->responseRequestError("Article not Found");
        }else{
            return $this->responseRequestError("Unauthorized");
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Articles
    |--------------------------------------------------------------------------
     */
    public function getArticles(Request $request){

        if(!empty($request->limit)){
            $article = Articles::limit($request->limit)->get();
        }else{
            $article = Articles::all();
        }

        return $this->responseRequestSuccess(ArticlesResource::collection($article));
    }

     /*
    |--------------------------------------------------------------------------
    | Response success
    |--------------------------------------------------------------------------
     */
    protected function responseRequestSuccess($ret)
    {
        return response()->json(['status' => 'success', 'data' => $ret], 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }

    /*
    |--------------------------------------------------------------------------
    | Response error
    |--------------------------------------------------------------------------
     */
    protected function responseRequestError($message = 'Bad request', $statusCode = 200)
    {
        return response()->json(['status' => 'error', 'error' => $message], $statusCode)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
