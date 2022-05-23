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
        <div class="title">Skeleton Elements</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Skeleton (or Ghost) elements designed to improve perceived performance and make app feels faster.</p>
        <p>Framework7 comes with two types of such elements: Skeleton Block and Skeleton Text. Skeleton block is a gray
          box that can be used as placeholder for any element. Skeleton text uses special built-in skeleton font to
          render each character of such text as gray rectangle. Skeleton text allows to make such elements responsive
          and feel more natural.</p>
        <p>It can be used in any places and with any elements.</p>
      </div>

      <div class="block-title">Skeleton List</div>
      <div class="list media-list skeleton-text">
        <ul>
          <li class="item-content">
            <div class="item-media">
              <div class="skeleton-block" style="width: 40px; height: 40px; border-radius: 50%"></div>
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Title</div>
              </div>
              <div class="item-subtitle">Subtitle</div>
              <div class="item-text">
                Placeholder text line 1<br />
                Text line 2
              </div>
            </div>
          </li>
          <li class="item-content">
            <div class="item-media">
              <div class="skeleton-block" style="width: 40px; height: 40px; border-radius: 50%"></div>
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Title</div>
              </div>
              <div class="item-subtitle">Subtitle</div>
              <div class="item-text">
                Placeholder text line 1<br />
                Text line 2
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">Skeleton Card</div>
      <div class="card skeleton-text">
        <div class="card-header">Card Header</div>
        <div class="card-content card-content-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          lobortis et massa ac interdum. Cras consequat felis at consequat hendrerit.</div>
        <div class="card-footer">Card Footer</div>
      </div>

      <div class="block-title">Loading Effects</div>
      <div class="block block-strong">
        <p>It supports few loading effects:</p>
        <p class="row">
          <a href="#" class="col button button-fill button-small button-round" @click=${()=> load('fade')}>Fade</a>
          <a href="#" class="col button button-fill button-small button-round" @click=${()=> load('wave')}>Wave</a>
          <a href="#" class="col button button-fill button-small button-round" @click=${()=> load('pulse')}>Pulse</a>
        </p>
      </div>
      <div class="list media-list">
        <ul>
          ${loading ? $h`
          <li class="item-content skeleton-text skeleton-effect-${effect}">
            <div class="item-media">
              <div class="skeleton-block" style="width: 40px; height: 40px; border-radius: 50%"></div>
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Full Name</div>
              </div>
              <div class="item-subtitle">Position</div>
              <div class="item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis et massa ac
                interdum. Cras consequat felis at consequat hendrerit. Aliquam vestibulum vitae lorem ac iaculis.
                Praesent nec pharetra massa, at blandit lectus. Sed tincidunt, lectus eu convallis elementum, nibh nisi
                aliquet urna, nec imperdiet felis sapien at enim.</div>
            </div>
          </li>
          <li class="item-content skeleton-text skeleton-effect-${effect}">
            <div class="item-media">
              <div class="skeleton-block" style="width: 40px; height: 40px; border-radius: 50%"></div>
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Full Name</div>
              </div>
              <div class="item-subtitle">Position</div>
              <div class="item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis et massa ac
                interdum. Cras consequat felis at consequat hendrerit. Aliquam vestibulum vitae lorem ac iaculis.
                Praesent nec pharetra massa, at blandit lectus. Sed tincidunt, lectus eu convallis elementum, nibh nisi
                aliquet urna, nec imperdiet felis sapien at enim.</div>
            </div>
          </li>
          <li class="item-content skeleton-text skeleton-effect-${effect}">
            <div class="item-media">
              <div class="skeleton-block" style="width: 40px; height: 40px; border-radius: 50%"></div>
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Full Name</div>
              </div>
              <div class="item-subtitle">Position</div>
              <div class="item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis et massa ac
                interdum. Cras consequat felis at consequat hendrerit. Aliquam vestibulum vitae lorem ac iaculis.
                Praesent nec pharetra massa, at blandit lectus. Sed tincidunt, lectus eu convallis elementum, nibh nisi
                aliquet urna, nec imperdiet felis sapien at enim.</div>
            </div>
          </li>
          ` : $h`
          <li class="item-content">
            <div class="item-media">
              <img src="https://placeimg.com/80/80/people/1" style="width: 40px; height: 40px; border-radius: 50%" />
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">John Doe</div>
              </div>
              <div class="item-subtitle">CEO</div>
              <div class="item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis et massa ac
                interdum. Cras consequat felis at consequat hendrerit. Aliquam vestibulum vitae lorem ac iaculis.
                Praesent nec pharetra massa, at blandit lectus. Sed tincidunt, lectus eu convallis elementum, nibh nisi
                aliquet urna, nec imperdiet felis sapien at enim.</div>
            </div>
          </li>
          <li class="item-content">
            <div class="item-media">
              <img src="https://placeimg.com/80/80/people/2" style="width: 40px; height: 40px; border-radius: 50%" />
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Jane Doe</div>
              </div>
              <div class="item-subtitle">Marketing</div>
              <div class="item-text">Cras consequat felis at consequat hendrerit. Aliquam vestibulum vitae lorem ac
                iaculis. Praesent nec pharetra massa, at blandit lectus. Sed tincidunt, lectus eu convallis elementum,
                nibh nisi aliquet urna, nec imperdiet felis sapien at enim.</div>
            </div>
          </li>
          <li class="item-content">
            <div class="item-media">
              <img src="https://placeimg.com/80/80/people/3" style="width: 40px; height: 40px; border-radius: 50%" />
            </div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Kate Johnson</div>
              </div>
              <div class="item-subtitle">Admin</div>
              <div class="item-text">Sed tincidunt, lectus eu convallis elementum, nibh nisi aliquet urna, nec imperdiet
                felis sapien at enim.</div>
            </div>
          </li>
          `}

        </ul>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $update }) => {
    let loading = false;
    let effect = null;

    const load = (newEffect) => {
      if (loading) return;
      effect = newEffect;
      loading = true;
      $update();
      setTimeout(function () {
        loading = false;
        $update();
      }, 3000);
    }
    return $render;
  }
</script>
