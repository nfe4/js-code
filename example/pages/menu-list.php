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
        <div class="title">Menu List</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Menu list unlike usual links list is designed to indicate currently active screen (or section) of your app.
          Think about it like a Tabbar but in a form of a list.</p>
      </div>
      <div class="list menu-list">
        <ul>
          <li>
            <a href="#" class="item-content item-link ${selected === 'home' ? 'item-selected' : ''}" @click=${()=>
              setItem('home')}
              >
              <div class="item-media">
                <i class="icon material-icons if-md">home</i>
                <i class="icon f7-icons if-not-md">house</i>
              </div>
              <div class="item-inner">
                <div class="item-title">Home</div>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="item-content item-link ${selected === 'profile' ? 'item-selected' : ''}" @click=${()=>
              setItem('profile')}
              >
              <div class="item-media">
                <i class="icon material-icons if-md">person</i>
                <i class="icon f7-icons if-not-md">person_fill</i>
              </div>
              <div class="item-inner">
                <div class="item-title">Profile</div>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="item-content item-link ${selected === 'settings' ? 'item-selected' : ''}" @click=${()=>
              setItem('settings')}
              >
              <div class="item-media">
                <i class="icon material-icons if-md">settings</i>
                <i class="icon f7-icons if-not-md">gear_alt_fill</i>
              </div>
              <div class="item-inner">
                <div class="item-title">Settings</div>
              </div>
            </a>
          </li>
        </ul>
      </div>

      <div class="list media-list menu-list">
        <ul>
          <li>
            <a href="#" class="item-content item-link ${selectedMedia === 'home' ? 'item-selected' : ''}" @click=${()=>
              setItemMedia('home')}
              >
              <div class="item-media">
                <i class="icon material-icons if-md">home</i>
                <i class="icon f7-icons if-not-md">house</i>
              </div>
              <div class="item-inner">
                <div class="item-title-wrap">
                  <div class="item-title">Home</div>
                </div>
                <div class="item-subtitle">Home subtitle</div>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="item-content item-link ${selectedMedia === 'profile' ? 'item-selected' : ''}"
              @click=${()=>
              setItemMedia('profile')}
              >
              <div class="item-media">
                <i class="icon material-icons if-md">person</i>
                <i class="icon f7-icons if-not-md">person_fill</i>
              </div>
              <div class="item-inner">
                <div class="item-title-wrap">
                  <div class="item-title">Profile</div>
                </div>
                <div class="item-subtitle">Profile subtitle</div>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="item-content item-link ${selectedMedia === 'settings' ? 'item-selected' : ''}"
              @click=${()=>
              setItemMedia('settings')}
              >
              <div class="item-media">
                <i class="icon material-icons if-md">settings</i>
                <i class="icon f7-icons if-not-md">gear_alt_fill</i>
              </div>
              <div class="item-inner">
                <div class="item-title-wrap">
                  <div class="item-title">Settings</div>
                </div>
                <div class="item-subtitle">Settings subtitle</div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $update }) => {
    let selected = 'home';
    let selectedMedia = 'home';

    const setItem = (newItem) => {
      selected = newItem;
      $update();
    }
    const setItemMedia = (newItem) => {
      selectedMedia = newItem;
      $update();
    }
    return $render;
  }
</script>
