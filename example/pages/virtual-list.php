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
        <div class="title">Virtual List</div>
        <div class="subnavbar">
          <form data-search-container=".virtual-list" data-search-item="li" data-search-in=".item-title"
            class="searchbar searchbar-init">
            <div class="searchbar-inner">
              <div class="searchbar-input-wrap">
                <input type="search" placeholder="Search" />
                <i class="searchbar-icon"></i>
                <span class="input-clear-button"></span>
              </div>
              <span class="searchbar-disable-button if-not-aurora">Cancel</span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="searchbar-backdrop"></div>
    <div class="page-content">
      <div class="block">
        <p>Virtual List allows to render lists with huge amount of elements without loss of performance. And it is fully
          compatible with all Framework7 list components such as Search Bar, Infinite Scroll, Pull To Refresh, Swipeouts
          (swipe-to-delete) and Sortable.</p>
        <p>Here is the example of virtual list with 10 000 items:</p>
      </div>
      <div class="list links-list">
        <ul>
          <li>
            <a href="/virtual-list-vdom/">Virtual List VDOM</a>
          </li>
        </ul>
      </div>
      <div class="list simple-list searchbar-not-found">
        <ul>
          <li>Nothing found</li>
        </ul>
      </div>
      <div class="list virtual-list media-list searchbar-found"></div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $el, $theme, $onMounted, $onBeforeUnmount }) => {
    let items = [];
    let virtualList;
    for (let i = 1; i <= 10000; i++) {
      items.push({
        title: 'Item ' + i,
        subtitle: 'Subtitle ' + i
      });
    }
    $onMounted(() => {
      virtualList = $f7.virtualList.create({
        // List Element
        el: $el.value.find('.virtual-list'),
        // Pass array with items
        items,
        // Custom search function for searchbar
        searchAll: function (query, items) {
          var found = [];
          for (var i = 0; i < items.length; i++) {
            if (items[i].title.toLowerCase().indexOf(query.toLowerCase()) >= 0 || query.trim() === '') found.push(i);
          }
          return found; //return array with mathced indexes
        },
        // List item render
        renderItem(item) {
          return `
          <li>
            <a href="#" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title-row">
                  <div class="item-title">${item.title}</div>
                </div>
                <div class="item-subtitle">${item.subtitle}</div>
              </div>
            </a>
          </li>`;
        },
        // Item height
        height: $theme.ios ? 63 : ($theme.md ? 73 : 77),
      });
    });

    $onBeforeUnmount(() => {
      virtualList.destroy()
    });

    return $render;
  }
</script>
