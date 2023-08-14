<div class="kb-home">
    <div class="kb-header">
       <h1 className="mb-3 text-4xl font-bold" > {{$pageFields['kb_home_hero_title']}} </h1>
      <p class="kb-description" id="hero-description"></p>
      <form action="" class="search-bar">
        <input type="search" name="search" placeholder="Search for articles" value="{{$searchTerm ?? null}}"
 required>
        <button class="search-btn" type="submit">
          <span>Search</span>
        </button>
	<button   className="ml-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline type="button">
                   Cancel
           </button>
      </form>
    </div>
  </div>