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
        <div class="title">Tabbar Scrollable</div>
        <div class="right">
          <a class="link" @click=${toggleToolbarPosition}>
            <i class="icon material-icons rotate-icon md-only">compare_arrows</i>
            <i class="icon f7-icons rotate-icon if-not-md">arrow_up_arrow_down_circle_fill</i>
          </a>
        </div>
      </div>
    </div>
    <div class="toolbar tabbar tabbar-scrollable toolbar-${toolbarPosition}">
      <div class="toolbar-inner">
        ${tabs.map((tab, index) => $h`
        <a href="#tab-${tab}" class="tab-link ${index === 0 ? 'tab-link-active' : ''}">Tab ${tab}</a>
        `)}
      </div>
    </div>
    <div class="tabs">
      ${tabs.map((tab, index) => $h`
      <div id="tab-${tab}" class="page-content tab ${index === 0 ? 'tab-active' : ''}">
        <div class="block">
          <p><b>Tab ${tab} content</b></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corrupti, quos asperiores unde aspernatur
            illum odio, eveniet. Fugiat magnam perspiciatis ex dignissimos, rerum modi ea nesciunt praesentium iusto
            optio rem?</p>
          <p>Illo debitis et recusandae, ipsum nisi nostrum vero delectus quasi. Quasi, consequatur! Corrupti, explicabo
            maxime incidunt fugit sint dicta saepe officiis sed expedita, minima porro! Ipsa dolores quia, delectus
            labore!</p>
          <p>At similique minima placeat magni molestias sunt deleniti repudiandae voluptatibus magnam quam esse
            reprehenderit dolor enim qui sed alias, laboriosam quaerat laborum iure repellat praesentium pariatur
            dolorum possimus veniam! Consectetur.</p>
          <p>Sunt, sed, magnam! Qui, suscipit. Beatae cum ullam necessitatibus eligendi, culpa rem excepturi consequatur
            quidem totam eum voluptates nihil, enim pariatur incidunt corporis sed facere magni earum tenetur rerum ea.
          </p>
          <p>Veniam nulla quis molestias voluptatem inventore consectetur iusto voluptatibus perferendis quisquam,
            cupiditate voluptates, tenetur vero magnam nisi animi praesentium atque adipisci optio quod aliquid vel
            delectus ad? Dicta deleniti, recusandae.</p>
        </div>
      </div>
      `)}
    </div>
  </div>
</template>
<style>
  .rotate-icon {
    transform: rotate(90deg);
  }
</style>
<script>
  export default (props, { $update }) => {
    let toolbarPosition = 'bottom';
    const tabs = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    const toggleToolbarPosition = () => {
      toolbarPosition = toolbarPosition === 'top' ? 'bottom' : 'top';
      $update();
    }

    return $render;
  };
</script>
