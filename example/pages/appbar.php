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
        <div class="title">Appbar</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Appbar is the main app bar with actions on top of the whole app. It is designed to be used in desktop apps
          with Aurora theme.</p>
      </div>
      <div class="block block-strong">
        <a href="#" class="button button-fill" @click=${toggleAppbar}>Toggle Appbar</a>
      </div>
    </div>
  </div>
</template>
<script>
  let globalAppbarEnabled = false;

  export default (props, { $f7, $, $update }) => {
    let appbarEnabled = globalAppbarEnabled;
    function enableAppbar() {
      appbarEnabled = true;
      globalAppbarEnabled = true;
      $update();
      $f7.$el.prepend(`
        <div class="appbar">
          <div class="appbar-inner">
            <div class="left">
              <a href="#" class="button button-small panel-toggle display-flex" data-panel="left">
                <i class="f7-icons">bars</i>
              </a>
              <a href="#" class="button button-small display-flex margin-left-half">
                <i class="f7-icons">square_list</i>
              </a>
              <a href="#" class="button button-small display-flex margin-left-half">
                <i class="f7-icons">arrowshape_turn_up_left_fill</i>
              </a>
              <a href="#" class="button button-small display-flex margin-left-half">
                <i class="f7-icons">arrowshape_turn_up_right_fill</i>
              </a>
            </div>
            <div class="right">
              <div class="searchbar searchbar-inline">
                <div class="searchbar-input-wrap">
                  <input type="text" placeholder="Search app">
                  <i class="searchbar-icon"></i>
                  <div class="input-clear-button"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
        `);
    }
    function disableAppbar() {
      appbarEnabled = false;
      globalAppbarEnabled = false;
      $update();
      $('.appbar').remove();
    }
    function toggleAppbar() {
      if (appbarEnabled) {
        disableAppbar();
      } else {
        enableAppbar();
      }
    }

    return $render;
  }
</script>
