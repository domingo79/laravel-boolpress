@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vue Post</h1>


        <div class="card_container">
            <div class="card" v-for="post in posts.data" v-bind:key="post.id">
                <img class="card-img-top" v-bind:src="post . image" alt="">
                <div class="card-body">
                    <h4 class="card-title">@{{ post . title }}</h4>
                    <p class="card-text">@{{ post . description }}</p>
                </div>
            </div>

        </div>


    </div>



@endsection
