@extends('layouts.frontend')
    @section('main-content')
    <h2>{{$beer->name}}</h2>
        <ul>
            <li>Alcohol:  {{$beer->alcohol}}   </li>
            <li>Score: {!! str_repeat ('&bigstar;', $beer->score)!!}</li>
        </ul>
    @endsection

    @section('sidebar')
    <section>
        <h1>Reviews</h1>
        <cite> Dorien </cite> : Dit drink ik niet zo graag
    </section>    
     <section>
        <h1>Reviews</h1>
        <cite> Martine </cite> : De smaak is maar een beetje bitter!
    </section>    
     <section>
        <h1>Reviews</h1>
        <cite> Dille </cite> : No thanks pleb.
    </section>    
    @endsection
