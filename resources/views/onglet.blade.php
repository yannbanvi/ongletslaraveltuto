@extends("app")

@section("main")

    <ul class="nav nav-tabs" id="myTab" role="tablist" >
        <li class="nav-item " role="presentation">
            <a href="{{ route('onglets.agents') }}" class="nav-link {{ currentRouteContains(collect(['onglets.agents', "onglets.index"])) ? 'active' : '' }}">Agents</a>
        </li>
        <li class="nav-item " role="presentation">
            <a href="{{ route('onglets.membres') }}" class="nav-link {{ currentRouteIs('onglets.membres') ? 'active' : '' }}">Membres</a>
        </li>
        <li class="nav-item " role="presentation">
            <a href="{{ route('onglets.responsables') }}" class="nav-link {{ currentRouteIs('onglets.responsables') ? 'active' : '' }}">Responsables</a>
        </li>
    </ul>

    <div class="tab-content py-5" id="myTabContent">

        @if(currentRouteContains(collect(["onglets.index", "onglets.agents"])))
            <livewire:agents/>
        @endif

        @if(currentRouteIs("onglets.membres"))
            <livewire:membres/>
        @endif

        @if(currentRouteIs("onglets.responsables"))
            <livewire:responsables/>
        @endif

    </div>
@endsection
