<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Articles::paginate(2);
        return view(
            '/home',
            ["title" => "Blog", "judul" => "Artikel"],
            compact('article')
        );
    }

    public function showarticle($id)
    {
        $article = Articles::find($id);
        // dd($article);
        return view(
            'showarticle',
            ["title" => "Blog", "judul" => "Artikel"],
            compact('article')
        );
    }

    public function dataarticle()
    {
        $article = Articles::paginate(2);
        return view(
            'dataarticle',
            ["title" => "Kelola Artikel", "judul" => "Kelola Artikel"],
            compact('article')
        );
    }

    public function tambaharticle()
    {
        $article = Articles::All();
        return view('tambaharticle', [
            'id' => $article, "title" => "Tambah Artikel", "judul" => "Tambah Artikel"
        ]);
    }

    public function insertarticle(Request $request)
    {

        $article = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'content' => $request->input('content'),

        ];
        if ($request->hasFile('picture')) {
            $file = $request->file('picture')->hashName();
            $request->file('picture')->move('photoarticles/', $file);
            $article['picture'] = $file;
        }
        $article = Articles::create($article);
        return redirect()->route('article.dataarticle')->with('Success', 'Artikel Berhasil Ditambahkan');
    }

    public function detailarticle($id)
    {
        $article = Articles::find($id);
        // dd($article);
        return view('editarticle', ["title" => "Rubah Artikel", "judul" => "Rubah Artikel"], compact('article'));
    }

    public function updatearticle(Request $request, $id)
    {
        $article = Articles::find($id);
        $data = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'content' => $request->input('content'),

        ];
        if ($request->hasFile('picture')) {
            $file = $request->file('picture')->hashName();
            $request->file('picture')->move('photoarticles/', $file);
            $data['picture'] = $file;
        }
        $article->update($data);
        return redirect()->route('article.dataarticle')->with('Success', 'Artikel Berhasil Dirubah');
    }

    public function deletearticle($id)
    {
        $article = Articles::find($id);
        $gambar = $article->picture;
        unlink('photoarticles/' . $gambar);
        $article->delete();
        return redirect()->route('article.dataarticle')->with('Success', 'Artikel Berhasil Dihapus');
    }
}
