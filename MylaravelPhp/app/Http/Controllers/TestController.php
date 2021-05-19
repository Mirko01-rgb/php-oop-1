<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie{
  public $title;
  public $description;


  public function __construct($title, $description = null){
    $this -> title = $title;
    $this -> description = $description;
    if ($description == null) {
      $this -> description = null;
    }
  }


  public function getString() {
    return "Film: " . $this -> title . " --> " . $this -> description;
  }
}

class TestController extends Controller
{

  // come detto a lezione, generare nuovo controller con rotta associata;
  // definire poi classe Movie con titolo e descrizione;
  // definire costruttore con titolo necessario e descrizione opzionale;
  // e metodo getString() che restituisca una stringa riportante tutte le variabili;
  // generare poi un paio di istanze e stamparle per mezzo del dd() come visto in classe
  public function home(){

    $films = new Movie ('In time', 'hshsjsjsjsjsjsjsjsjssjjs');
    $film1 = $films -> getString();


    $film2 = new Movie ('Pirati dei caraibi', 'hdhhdhdhdhd');

    $film3 = new Movie ('Re Leone');

    dd($film1, $film2, $film3);







    return view('pages.home');
  }
}
