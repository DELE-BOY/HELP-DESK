@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Forum</h2>
                <p>Upload your questions. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <div class="col mt-5">
            <div class="container g-3">

                <br>
                <h4>
                    <strong> Question: </strong>{{ $forum->questions }}
                </h4>
                <br>

                {{-- Comentario del resto de los participantes --}}
        <div class="" >
            @foreach ($answer as $answers)
                <div class="row mt-3">
                    <div class="col">
                        
                       
                            <li class="list-group-item d-flex justify-content-between align-items-start">

                                <div class="card" style="width: 69rem;">
                                    
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p class="card-text">
                                                {{ $answers->answer }}
                                            </p>
                                        </blockquote>
                                    </div>
                                </div>

                             
                                   


                            </li>
                        
                    </div>
                </div>
            @endforeach
        </div>

                <br>
                <form action="{{ route('storeAnswer') }}" method="post">
                    @csrf
                    <div class="
                        col-md-6">

                        <textarea class="form-control" name="answer" rows="3" placeholder="Insert comment"></textarea>
                        <span class="text-danger">
                            @error('answer')
                                * {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    <br>
                    <input name="forum_id" type="hidden" value="{{$forum->id}}">
                    <div class="col-4 mb-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>





    </main><!-- End #main -->
@endsection
