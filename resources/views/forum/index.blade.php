@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Forum</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
                    quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->
        <div class="container">
            <a href="{{ route('create') }}" class="btn btn-primary mt-4"> Ask Question</a>
            <h1 class="mt-5">Forum</h1>

            @if (count($forums) > 0)
                @foreach ($forums as $forum)
                    <div class="container  d-flex align-items-left">


                        <div class="card card-body bg-light mb-3">

                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <h3><a href="forum/show/{{ $forum->id }}">{{ $forum->questions }} </a></h3>
                                </div>


                            </div>


                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </main><!-- End #main -->


@endsection
