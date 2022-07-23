<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<div class="accordion" id="accordionExample">
    @foreach ($ships as $ship)
    <div class="accordion-item bg-white border border-gray-200">
        <h2 class="accordion-header mb-0" id="heading{{ $ship->term_id }}">
            <button class="
        accordion-button
        relative
        flex
        items-center
        w-full
        py-4
        px-5
        text-base text-gray-800 text-left
        bg-white
        border-0
        rounded-none
        transition
        focus:outline-none
      " type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$ship->term_id}}" aria-expanded="true" aria-controls="collapse{{$ship->term_id}}">
                {{$ship->term_id}} {{$ship->name}}
            </button>
        </h2>
        <div id="collapse{{ $ship->term_id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $ship->term_id }}" data-bs-parent="#accordionExample">
            <div class="accordion-body py-4 px-5">
                <dl>
                    <dt>term_id</dt>
                    <dd>{{ $ship->term_id }}</dd>
                    <dt>name</dt>
                    <dd>{{ $ship->name }} / {{ $ship['english-name'] }}</dd>
                    <dt>slug</dt>
                    <dd>{{ $ship->slug }}</dd>
                    <dt>description</dt>
                    <dd>{{ $ship->description }}</dd>
                    <dt>MMSI / Military Number</dt>
                    <dd>{{ $ship->mmsi }}{{ $ship['military-number'] }}</dd>
                    <dt>IMO</dt>
                    <dd>{{ $ship->imo }}</dd>
                    <dt>callsign</dt>
                    <dd>{{ $ship->callsign }}</dd>
                    <dt>active</dt>
                    <dd>{{ $ship->active }}</dd>
                    <dt>ship type</dt>
                    <dd>{{ $ship->ship_type }}</dd>
                    <dt>launched</dt>
                    <dd>{{ $ship->launched }}</dd>
                    <dt>start</dt>
                    <dd>{{ $ship['start-date'] }}</dd>
                    <dt>link</dt>
                    <dd><a href="{{$ship->url}}">{{ $ship->urltitle }}</a></dd>
                </dl>
            </div>
        </div>
    </div>
        @endforeach
    </div>