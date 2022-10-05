@extends('layouts.default', ['body_class' => 'frontend-searchresults-page'])
@section('content')
    <section class="search_results">
        <div class="container">
            <h1 class="h1">Zoekresultaten (4)</h1>
            <div>
                <a class="search_result card flex-container shadow" href="{{ route('frontend.profile', ['user' => 1]) }}">
                    <div class="flex-container search_results_main">
                        <div class="search_result_image">
                            <img src="{{ asset('images/thijs_round.png') }}" class="img-responsive" alt="profile">
                        </div>

                        <div class="search_result_profile_info">
                            <p class="h4 is-bold">Thijs Roelofse</p>
                            <span>23 jaar</span>
                            <span>Westervoort</span>
                        </div>
                    </div>
                    <div class="flex-container search_results_additional">
                        <div class="search_result_bio">
                            <span><b>Biografie</b></span>
                            <p> Ik werk voor kinderen en jong volwassenen in de leeftijd van 13-20 jaar op een SGLVB woonvoorziening. Bij de bewoners is er sprake van een licht verstandelijk beperking, gedragsstoornissen en gedragsproblematieken, ADHD, autisme, PDD-NOS, hechtingsstoornissen ect.
                                Tevens zijn ze sociaal-emotioneel in de leeftijd 18 maanden tot 4 jaar. </p>
                        </div>
                        <div class="search_result_profile_checklist">
                            <span><b>Eigenschappen</b></span>
                            <ul>
                                <li>
                                    <i class="material-icons">check</i>
                                    VOG
                                </li>
                                <li>
                                <i class="material-icons">check</i>
                                    Diploma
                                </li>
                                <li>
                                    <i class="material-icons">check</i>
                                    Referenties
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a class="search_result card flex-container shadow" href="{{ route('frontend.profile', ['user' => 1]) }}">
                    <div class="flex-container search_results_main">
                        <div class="search_result_image">
                            <img src="{{ asset('images/thijs_round.png') }}" class="img-responsive" alt="profile">
                        </div>

                        <div class="search_result_profile_info">
                            <p class="h4 is-bold">John Doe</p>
                            <span>23 jaar</span>
                            <span>Westervoort</span>
                        </div>
                    </div>
                    <div class="flex-container search_results_additional">
                        <div class="search_result_bio">
                            <span><b>Biografie</b></span>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas, leo in dapibus malesuada, purus magna feugiat est, eget efficitur lectus quam a arcu. Orci varius natoque penatibus et magnis dis </p>
                        </div>
                        <div class="search_result_profile_checklist">
                            <span><b>Eigenschappen</b></span>
                            <ul>
                                <li>
                                    <i class="material-icons">check</i>
                                    Starter
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
