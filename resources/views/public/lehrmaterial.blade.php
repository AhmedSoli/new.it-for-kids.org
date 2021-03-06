@extends('layouts.public')
@section('content')
<div class="container" style="max-width: 800px;">
    <div class="row mb-4">
        <h3 class="center">Wie bringen wir Kindern Programmieren bei? </h3>
    </div>
    <div class="row pb-5">
        <div class="col-6">
            <img src="{{ URL::to('/') }}/images/lehrmaterial_one.jpg" alt="" class="img-fluid img shadow" style="max-height:300px; border-radius: 15px;padding:5px;">
        </div>
        <div class="col-6">
            <p>Auch wenn programmieren gar nicht so schwer ist, wie man allgemein schnell denkt, braucht es trotzdem ein Konzept, wie die Kinder sinnvoll herangeführt werden können. Wir verfolgen mit unserem Material zwei Ziele: einerseits, dass die Kinder spielerisch damit interagieren können, und andererseits, dass wichtige Grundkonzepte der Programmierung behandelt werden.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <p>
                Um frustfreien Fortschritt zu ermöglichen, sind unsere Lektionen in „Level“ unterteilt. Ähnlich zu Videospielen muss immer erst das aktuelle Level beendet werden, bevor das nächste beginnen kann. Auf diese Weise können wir nach und nach neue Inhalte, Funktionen und Konzepte dazu nehmen, ohne direkt mit zu vielen Neuerungen zu überfordern.
            </p>
            <p>
                Um den Tutor oder Lehrer, der den Kurs durchführt optimal vorzubereiten erstellen wir ein Handbuch, was Kapitel für Kapitel alle Level erläutert und eine Vorbereitung auf die Unterrichtseinheit ermöglicht.
            </p>
        </div>
        <div class="col-6">
            <img src="{{ URL::to('/') }}/images/lehrmaterial_two.jpg" alt="" class="img-fluid img shadow" style="max-height:300px; border-radius: 15px;padding:5px;">
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection