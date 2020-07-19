@extends('homepage')

@section('allnotes')
 <!--==========================
      All Notes cards Section
    ============================-->



<div class="main">
  <h1>Notes are memories</h1>
  <ul class="cards">
    @foreach ($notes->reverse() as $note)
    @if ($note->url)
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="upload/{{$note->url}}"></div>
            <div class="card_content">
            <h2 class="card_title">{{ $note->title }}</h2>
            <p class="card_text">{{ $note->body }}</p>
            <a href="/notes/{{ $note->id }}/delete"><button class="btn card_btn">Delete</button></a>
            </div>
        </div>
        </li>
    @endif
    @endforeach
  </ul>
</div>

@stop
