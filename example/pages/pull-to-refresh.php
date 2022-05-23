<template>
  <div class="page">
    <div class="navbar navbar-style-1">
      <div class="navbar-bg"></div>
      <div class="navbar-inner sliding">
        <div class="left">
          <a href="#" class="link back">
            <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261"/>
				</svg>
            <span class="if-not-md">Back</span>
          </a>
        </div>
        <div class="title">Pull To Refresh</div>
      </div>
    </div>
    <div class="page-content ptr-content" data-ptr-mousewheel="true" @ptr:refresh=${loadMore}>
      <div class="ptr-preloader">
        <div class="preloader"></div>
        <div class="ptr-arrow"></div>
      </div>
      <div class="list media-list">
        <ul>
          ${items.map((item) => $h`
          <li class="item-content">
            <div class="item-media"><img src=${item.picURL} width="44" /></div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">${item.song}</div>
              </div>
              <div class="item-subtitle">${item.author}</div>
            </div>
          </li>
          `)}
        </ul>
        <div class="block-footer">
          <p>Just pull page down to let the magic happen.<br />Note that pull-to-refresh feature is optimised for touch
            and native scrolling so it may not work on desktop browser.</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $update }) => {
    const songs = ['Yellow Submarine', 'Don\'t Stop Me Now', 'Billie Jean', 'Californication'];
    const authors = ['Beatles', 'Queen', 'Michael Jackson', 'Red Hot Chili Peppers'];
    let items = [
      {
        picURL: 'https://cdn.framework7.io/placeholder/abstract-88x88-1.jpg',
        song: 'Yellow Submarine',
        author: 'Beatles',
      },
      {
        picURL: 'https://cdn.framework7.io/placeholder/abstract-88x88-2.jpg',
        song: 'Don\'t Stop Me Now',
        author: 'Queen',
      },
      {
        picURL: 'https://cdn.framework7.io/placeholder/abstract-88x88-3.jpg',
        song: 'Billie Jean',
        author: 'Michael Jackson',
      },
    ]

    const loadMore = (e, done) => {
      setTimeout(() => {
        // Add new item
        items.push({
          picURL: 'https://cdn.framework7.io/placeholder/abstract-88x88-' + (Math.floor(Math.random() * 10) + 1) + '.jpg',
          song: songs[Math.floor(Math.random() * songs.length)],
          author: authors[Math.floor(Math.random() * authors.length)],
        })

        // Update state to rerender
        $update();

        // Done
        done();
      }, 1000);
    }

    return $render;
  }
</script>
