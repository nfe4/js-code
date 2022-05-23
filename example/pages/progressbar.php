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
        <div class="title">Progress Bar</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block">
        <p>In addition to <a href="/preloader/">Preloader</a>, Framework7 also comes with fancy animated determinate and
          infinite/indeterminate progress bars to indicate some activity.</p>
      </div>
      <div class="block-title">Determinate Progress Bar</div>
      <div class="block block-strong">
        <p>When progress bar is determinate it indicates how long an operation will take when the percentage complete is
          detectable.</p>
        <p>Inline determinate progress bar:</p>
        <div>
          <p><span data-progress="10" class="progressbar" id="demo-inline-progressbar"></span></p>
          <p class="segmented segmented-raised">
            <a href="#" data-progress="10" class="button" @click=${()=> setInlineProgress(10)}>10%</a>
            <a href="#" data-progress="30" class="button" @click=${()=> setInlineProgress(30)}>30%</a>
            <a href="#" data-progress="50" class="button" @click=${()=> setInlineProgress(50)}>50%</a>
            <a href="#" data-progress="100" class="button" @click=${()=> setInlineProgress(100)}>100%</a>
          </p>
        </div>
        <div>
          <p>Inline determinate load & hide:</p>
          <p id="demo-determinate-container"></p>
          <p>
            <a href="" class="button button-fill" @click=${()=> showDeterminate(true)}>Start Loading</a>
          </p>
        </div>
        <div>
          <p>Overlay with determinate progress bar on top of the app:</p>
          <p>
            <a href="" class="button button-fill" @click=${()=> showDeterminate(false)}>Start Loading</a>
          </p>
        </div>
      </div>
      <div class="block-title">Infinite Progress Bar</div>
      <div class="block block-strong">
        <p>When progress bar is infinite/indeterminate it requests that the user wait while something finishes when it’s
          not necessary to indicate how long it will take.</p>
        <p>Inline infinite progress bar</p>
        <p>
          <span class="progressbar-infinite"></span>
        </p>
        <p>Multi-color infinite progress bar</p>
        <p>
          <span class="progressbar-infinite color-multi"></span>
        </p>
        <div>
          <p>Overlay with infinite progress bar on top of the app</p>
          <p id="demo-infinite-container"></p>
          <p>
            <a href="" class="button button-fill" @click=${()=> showInfinite(false)}>Start Loading</a>
          </p>
        </div>
        <div>
          <p>Overlay with infinite multi-color progress bar on top of the app</p>
          <p>
            <a href="" class="button button-fill" @click=${()=> showInfinite(true)}>Start Loading</a>
          </p>
        </div>
      </div>
      <div class="block-title">Colors</div>
      <div class="list simple-list">
        <ul>
          <li>
            <div class="progressbar color-blue" data-progress="10"></div>
          </li>
          <li>
            <div class="progressbar color-red" data-progress="20"></div>
          </li>
          <li>
            <div class="progressbar color-pink" data-progress="30"></div>
          </li>
          <li>
            <div class="progressbar color-green" data-progress="80"></div>
          </li>
          <li>
            <div class="progressbar color-yellow" data-progress="90"></div>
          </li>
          <li>
            <div class="progressbar color-orange" data-progress="100"></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $el, $onMounted, $onBeforeUnmount }) => {
    let determinateLoading = false;
    let infiniteLoading = false;
    const setInlineProgress = (value) => {
      $f7.progressbar.set('#demo-inline-progressbar', value);
    }
    const showDeterminate = (inline) => {
      if (determinateLoading) return;
      determinateLoading = true;
      var progressBarEl;
      if (inline) {
        progressBarEl = $f7.progressbar.show('#demo-determinate-container', 0);
      } else {
        progressBarEl = $f7.progressbar.show(0);
      }
      var progress = 0;
      function simulateLoading() {
        setTimeout(function () {
          var progressBefore = progress;
          progress += Math.random() * 20;
          $f7.progressbar.set(progressBarEl, progress);
          if (progressBefore < 100) {
            simulateLoading(); //keep "loading"
          }
          else {
            determinateLoading = false;
            $f7.progressbar.hide(progressBarEl); //hide
          }
        }, Math.random() * 200 + 200);
      }
      simulateLoading();
    }
    const showInfinite = (multiColor) => {
      if (infiniteLoading) return;
      infiniteLoading = true;
      if (multiColor) {
        $f7.progressbar.show('multi');
      } else {
        $f7.progressbar.show();
      }
      setTimeout(function () {
        infiniteLoading = false;
        $f7.progressbar.hide();
      }, 3000);
    }

    return $render;
  };
</script>
