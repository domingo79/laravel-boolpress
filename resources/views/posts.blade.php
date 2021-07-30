@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vue Post</h1>


        <div class="card_container">

            <div class="card mb-3" style="max-width: 800px;" v-for="post in posts" v-bind:key="post.id">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img v-bind:src="post . image" v-bind:alt="post.title + ' images'">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">@{{ post . title }}</h5>
                            <p class="card-text">@{{ post . description }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>



@endsection
