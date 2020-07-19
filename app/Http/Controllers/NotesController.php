<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\Note;


class NotesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {}

      //Create new Note
      public function index(){
        return view('content.noteform');
            }

        //Find All Notes
        public function notes(){
        $notes = Note::all();
        return view('content.allnotes', compact('notes'));
            }

        //Delete One Note
        public function delete($id){
            $query = DB::table('notes')->where('id', '=', $id);
            $note = $query->first();
            $img_name = $note->url;
            File::delete(public_path('upload') . $img_name);
            $query->delete();
            return back();
            }


        //Store One Note
        public function store(Request $request){

            $this->validate(request(), [
                'title' => 'required',
                'body' => 'required',
                'url' => 'image|mimes:JPG,jpg,jpeg,gif,png,HEIC|max:8048' //limit max size
            ]);

            $img_name = time() . '.' . $request->url->getClientOriginalExtension();


            $note = new note;

            $note->title = request('title');
            $note->body = request('body');
            $note->url = $img_name;

            $note->save();
            $request->url->move(public_path('upload'), $img_name);

            return redirect('/notes');

        }
}
