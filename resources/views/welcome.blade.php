@extends('master')
@section('content')
<div class="grid grid-cols-2">
<a class="p-10 m-4 rounded-lg font-bold text-lg justify-between items-center h-100 bg-slate-400" href="/map">MAP</a>
<a href="/report" class="p-10 m-4 rounded-lg font-bold text-lg bg-red-600 h-100 justify-between">REPORT</a>
</div>

<div class="p-4">
    <h1 class="font-bold text-4xl">About OpenStreetMap</h1>
    <p>OpenStreetMap is a free, editable map of the whole world that is being built by volunteers largely from scratch and released with an open-content license.

The OpenStreetMap License allows free (or almost free) access to our map images and all of our underlying map data. The project aims to promote new and interesting uses of this data. See "Why OpenStreetMap?" for more details about why we want an open-content map and for the answer to the question we hear most frequently: Why not just use Google Maps?</p></br>


 <h2 class="font-bold text-2xl">The Map</h2>
 <p>Browsing our map is easy. Have a look around and see what you think of our coverage and detail. Over the years we've progressed quite spectacularly, achieving many mapping milestones. Individuals, governments and commercial companies have already begun putting this data to use, and in many countries, for many uses, OpenStreetMap is a viable alternative to other map providers. However the map isn't finished yet. The world is a big place. How does your neighbourhood look on OSM? There's lots of other ways to start using OpenStreetMap too.</p></br>

 <h2 class="font-bold text-2xl">Mapping</h2>
 <p>This is not just an online project. We are getting out from behind our computer screens, and surveying towns and countryside to create our maps. This is very much a community mapping effort. We use wiki-style collaborative editing software to support this, which means that our maps will keep growing bigger and better. If you have a GPS unit you can contribute any tracks you have recorded. We are also able to derive maps from Bing aerial imagery or other mapping techniques. You can start editing our maps straight away using the online "iD" editor, or download the JOSM desktop application.</p></br>

 <h2 class="font-bold text-2xl">Development</h2>
 <p>Extensive software development work is taking this project in many different directions. As mentioned above, we have created various map editing tools. In fact OpenStreetMap is powered by open-source software from its slippy map interface to the underlying data access API (a web service interface for reading and writing map data). There is opportunity for subprojects that work with or use our data, but we also need help fixing bugs and adding features to our core components.

Developers and translators are always welcome!</p></br>
    </div>
@endsection