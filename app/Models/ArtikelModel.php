<?php

namespace App\models;

use Illuminate\Support\Facades\DB;
use Psy\CodeCleaner\ReturnTypePass;

class ArtikelModel
{
    public static function get_all()
    {
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }
    public static function save($data)
    {
        $new_artikel = DB::table('artikel')->insert($data);

        return $new_artikel;
    }
    public static function find_by_id($id)
    {
        $artikel = DB::table('artikel')->where('id_artikel', $id)->get();
        // dd($items);
        return $artikel;
    }
    public  static function delete($id)
    {
        $artikel = DB::table('artikel')->where('id_artikel', $id)->delete();
        return $artikel;
    }

    public  static function update($id, $request)
    {
        $artikel = DB::table('artikel')
            ->where('id_artikel', $id)
            ->update([
                'id_artikel' => $request["id_artikel"],
                'judul' => $request["judul"],
                'isi' => $request["isi"],
                'slug' => $request["slug"],
                'tag' => $request["tag"],
                'id_user' => $request["id_user"],
            ]);
        return $artikel;
    }
    public static function destroy($id)
    {
        $deleted = DB::table('artikel')
            ->where('id', $id)
            ->delete();
        return redirect('/artikel');
    }
}
