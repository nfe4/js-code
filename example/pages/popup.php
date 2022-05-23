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
        <div class="title">Popup</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Popup is a modal window with any HTML content that pops up over App's main content. Popup as all other
          overlays is part of so called "Temporary Views".</p>
        <p>
          <a href="#" class="button button-fill popup-open" data-popup=".demo-popup">Open Popup</a>
        </p>
        <p>
          <a href="#" class="button button-fill" @click=${createPopup}>Create Dynamic Popup</a>
        </p>
      </div>
      <div class="block-title">Swipe To Close</div>
      <div class="block block-strong">
        <p>Popup can be closed with swipe to top or bottom:</p>
        <p>
          <a href="#" class="button button-fill popup-open" data-popup=".demo-popup-swipe">Swipe To Close</a>
        </p>
        <p>Or it can be closed with swipe on special swipe handler and, for example, only to bottom:</p>
        <p>
          <a href="#" class="button button-fill popup-open" data-popup=".demo-popup-swipe-handler">With Swipe
            Handler</a>
        </p>
      </div>
      <div class="block-title">Push View</div>
      <div class="block block-strong">
        <p>Popup can push view behind. By default it has effect only when "safe-area-inset-top" is more than zero (iOS
          fullscreen webapp or iOS cordova app)</p>
        <p>
          <a href="#" class="button button-fill popup-open" data-popup=".demo-popup-push">Popup Push</a>
        </p>
      </div>
    </div>
    <div class="popup demo-popup">
      <div class="page">
        <div class="navbar navbar-style-1">
          <div class="navbar-bg"></div>
          <div class="navbar-inner">
            <div class="title">Popup Title</div>
            <div class="right"><a href="#" class="link popup-close">Close</a></div>
          </div>
        </div>
        <div class="page-content">
          <div class="block">
            <p>Here comes popup. You can put here anything, even independent view with its own navigation. Also not,
              that by default popup looks a bit different on iPhone/iPod and iPad, on iPhone it is fullscreen.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum
              neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus,
              viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper
              tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat
              nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis
              elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.
            </p>
            <p>Duis ut mauris sollicitudin, venenatis nisi sed, luctus ligula. Phasellus blandit nisl ut lorem semper
              pharetra. Nullam tortor nibh, suscipit in consequat vel, feugiat sed quam. Nam risus libero, auctor vel
              tristique ac, malesuada ut ante. Sed molestie, est in eleifend sagittis, leo tortor ullamcorper erat, at
              vulputate eros sapien nec libero. Mauris dapibus laoreet nibh quis bibendum. Fusce dolor sem, suscipit in
              iaculis id, pharetra at urna. Pellentesque tempor congue massa quis faucibus. Vestibulum nunc eros,
              convallis blandit dui sit amet, gravida adipiscing libero.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="popup demo-popup-push">
      <div class="view view-init">
        <div class="page page-with-navbar-large">
          <div class="navbar navbar-large navbar-transparent">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
              <div class="title">Push Popup</div>
              <div class="right"><a href="#" class="link popup-close">Close</a></div>
              <div class="title-large">
                <div class="title-large-text">Push Popup</div>
              </div>
            </div>
          </div>
          <div class="page-content">
            <div class="block">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum
                neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus,
                viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper
                tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare
                consequat nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed
                libero mollis elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a
                faucibus lectus.</p>
              <p>Duis ut mauris sollicitudin, venenatis nisi sed, luctus ligula. Phasellus blandit nisl ut lorem semper
                pharetra. Nullam tortor nibh, suscipit in consequat vel, feugiat sed quam. Nam risus libero, auctor vel
                tristique ac, malesuada ut ante. Sed molestie, est in eleifend sagittis, leo tortor ullamcorper erat, at
                vulputate eros sapien nec libero. Mauris dapibus laoreet nibh quis bibendum. Fusce dolor sem, suscipit
                in iaculis id, pharetra at urna. Pellentesque tempor congue massa quis faucibus. Vestibulum nunc eros,
                convallis blandit dui sit amet, gravida adipiscing libero.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum
                neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus,
                viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper
                tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare
                consequat nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed
                libero mollis elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a
                faucibus lectus.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup demo-popup-swipe">
      <div class="page">
        <div class="navbar navbar-style-1">
          <div class="navbar-bg"></div>
          <div class="navbar-inner">
            <div class="title">Swipe To Close</div>
            <div class="right"><a href="#" class="link popup-close">Close</a></div>
          </div>
        </div>
        <div class="page-content">
          <div style="height: 100%" class="display-flex justify-content-center align-items-center">
            <p>Swipe me up or down</p>
          </div>
        </div>
      </div>
    </div>
    <div class="popup demo-popup-swipe-handler">
      <div class="page">
        <div class="swipe-handler"></div>
        <div class="page-content">
          <div class="block-title block-title-large">Hello!</div>
          <div class="block block-strong">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum
              neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus,
              viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper
              tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat
              nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis
              elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.
            </p>
            <p>Duis ut mauris sollicitudin, venenatis nisi sed, luctus ligula. Phasellus blandit nisl ut lorem semper
              pharetra. Nullam tortor nibh, suscipit in consequat vel, feugiat sed quam. Nam risus libero, auctor vel
              tristique ac, malesuada ut ante. Sed molestie, est in eleifend sagittis, leo tortor ullamcorper erat, at
              vulputate eros sapien nec libero. Mauris dapibus laoreet nibh quis bibendum. Fusce dolor sem, suscipit in
              iaculis id, pharetra at urna. Pellentesque tempor congue massa quis faucibus. Vestibulum nunc eros,
              convallis blandit dui sit amet, gravida adipiscing libero.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum
              neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus,
              viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper
              tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat
              nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis
              elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.
            </p>
            <p>Duis ut mauris sollicitudin, venenatis nisi sed, luctus ligula. Phasellus blandit nisl ut lorem semper
              pharetra. Nullam tortor nibh, suscipit in consequat vel, feugiat sed quam. Nam risus libero, auctor vel
              tristique ac, malesuada ut ante. Sed molestie, est in eleifend sagittis, leo tortor ullamcorper erat, at
              vulputate eros sapien nec libero. Mauris dapibus laoreet nibh quis bibendum. Fusce dolor sem, suscipit in
              iaculis id, pharetra at urna. Pellentesque tempor congue massa quis faucibus. Vestibulum nunc eros,
              convallis blandit dui sit amet, gravida adipiscing libero.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $onMounted, $onBeforeUnmount }) => {
    let popup;
    let popupSwipe;
    let popupSwipeHandler;
    let popupPush;

    const createPopup = () => {
      // Create popup
      if (!popup) {
        popup = $f7.popup.create({
          content: /*html*/`
            <div class="popup">
              <div class="page">
                <div class="navbar navbar-style-1">
                  <div class="navbar-bg"></div>
                  <div class="navbar-inner">
                    <div class="title">Dynamic Popup</div>
                    <div class="right"><a href="#" class="link popup-close">Close</a></div>
                  </div>
                </div>
                <div class="page-content">
                  <div class="block">
                    <p>This popup was created dynamically</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus, viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.</p>
                  </div>
                </div>
              </div>
            </div>
          `
        });
      }
      // Open it
      popup.open();
    }

    $onMounted(() => {
      popupSwipe = $f7.popup.create({
        el: '.demo-popup-swipe',
        swipeToClose: true,
      });
      popupSwipeHandler = $f7.popup.create({
        el: '.demo-popup-swipe-handler',
        swipeToClose: 'to-bottom',
        swipeHandler: '.swipe-handler'
      });
      popupPush = $f7.popup.create({
        el: '.demo-popup-push',
        swipeToClose: true,
        push: true,
      });
    })

    $onBeforeUnmount(() => {
      // Destroy popup when page removed
      if (popup) popup.destroy();
      if (popupSwipe) popupSwipe.destroy();
      if (popupSwipeHandler) popupSwipeHandler.destroy();
      if (popupPush) popupPush.destroy();
    })

    return $render;
  }
</script>
