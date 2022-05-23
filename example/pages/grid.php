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
      <div class="title">Grid / Layout</div>
    </div>
  </div>
  <div class="page-content grid-demo">
    <div class="block">
      <p>Columns within a row are automatically set to have equal width. Otherwise you can define your column with pourcentage of screen you want.</p>
    </div>
    <div class="block-title">Columns with gap</div>
    <div class="block">
      <div class="row">
        <div class="col">50% (.col)</div>
        <div class="col">50% (.col)</div>
      </div>
      <div class="row">
        <div class="col">25% (.col)</div>
        <div class="col">25% (.col)</div>
        <div class="col">25% (.col)</div>
        <div class="col">25% (.col)</div>
      </div>
      <div class="row">
        <div class="col">33% (.col)</div>
        <div class="col">33% (.col)</div>
        <div class="col">33% (.col)</div>
      </div>
      <div class="row">
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
      </div>
      <div class="row">
        <div class="col-33">33% (.col-33)</div>
        <div class="col-66">66% (.col-66)</div>
      </div>
      <div class="row">
        <div class="col-25">25% (.col-25)</div>
        <div class="col-25">25% (.col-25)</div>
        <div class="col-50">50% (.col-50)</div>
      </div>
      <div class="row">
        <div class="col-75">75% (.col-75)</div>
        <div class="col-25">25% (.col-25)</div>
      </div>
      <div class="row">
        <div class="col-80">80% (.col-80)</div>
        <div class="col-20">20% (.col-20)</div>
      </div>
    </div>
    <div class="block-title">No gap between columns</div>
    <div class="block">
      <div class="row no-gap">
        <div class="col">50% (.col)</div>
        <div class="col">50% (.col)</div>
      </div>
      <div class="row no-gap">
        <div class="col">25% (.col)</div>
        <div class="col">25% (.col)</div>
        <div class="col">25% (.col)</div>
        <div class="col">25% (.col)</div>
      </div>
      <div class="row no-gap">
        <div class="col">33% (.col)</div>
        <div class="col">33% (.col)</div>
        <div class="col">33% (.col)</div>
      </div>
      <div class="row no-gap">
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
        <div class="col">20% (.col)</div>
      </div>
      <div class="row no-gap">
        <div class="col-33">33% (.col-33)</div>
        <div class="col-66">66% (.col-66)</div>
      </div>
      <div class="row no-gap">
        <div class="col-25">25% (.col-25)</div>
        <div class="col-25">25% (.col-25)</div>
        <div class="col-50">50% (.col-50)</div>
      </div>
      <div class="row no-gap">
        <div class="col-75">75% (.col-75)</div>
        <div class="col-25">25% (.col-25)</div>
      </div>
      <div class="row no-gap">
        <div class="col-80">80% (.col-80)</div>
        <div class="col-20">20% (.col-20)</div>
      </div>
    </div>

    <div class="block-title">Nested</div>
    <div class="block">
      <div class="row">
        <div class="col">50% (.col)
          <div class="row">
            <div class="col">50% (.col)</div>
            <div class="col">50% (.col)</div>
          </div>
        </div>
        <div class="col">50% (.col)
          <div class="row">
            <div class="col-33">33% (.col-33)</div>
            <div class="col-66">66% (.col-66)</div>
          </div>
        </div>
      </div>
    </div>

    <div class="block-title">Responsive Grid</div>
    <div class="block">
      <p>Grid cells have different size on Phone/Tablet</p>
      <div class="row">
        <div class="col-100 medium-50">.col-100.medium-50</div>
        <div class="col-100 medium-50">.col-100.medium-50</div>
      </div>
      <div class="row">
        <div class="col-50 medium-25">.col-50.medium-25</div>
        <div class="col-50 medium-25">.col-50.medium-25</div>
        <div class="col-50 medium-25">.col-50.medium-25</div>
        <div class="col-50 medium-25">.col-50.medium-25</div>
      </div>
      <div class="row">
        <div class="col-100 medium-40">.col-100.medium-40</div>
        <div class="col-50 medium-60">.col-50.medium-60</div>
        <div class="col-50 medium-66">.col-50.medium-66</div>
        <div class="col-100 medium-33">.col-100.medium-33</div>
      </div>
    </div>

    <div class="block-title">Resizable Grid</div>
    <div class="block grid-resizable-demo">
      <div class="row align-items-stretch" style="height: 300px">
        <div class="col resizable demo-col-center-content" style="min-width: 80px">
          Left
          <span class="resize-handler"></span>
        </div>
        <div class="col resizable display-flex flex-direction-column" style="padding: 0px; border: none; min-width: 80px; background-color: transparent">
          <div class="row resizable" style="height: 50%; min-height: 50px">
            <div class="col demo-col-center-content" style="height: 100%">Center Top</div>
            <span class="resize-handler"></span>
          </div>
          <div class="row resizable" style="height: 50%; min-height: 50px">
            <div class="col demo-col-center-content" style="height: 100%">Center Bottom</div>
            <span class="resize-handler"></span>
          </div>
          <span class="resize-handler"></span>
        </div>
        <div class="col resizable demo-col-center-content" style="min-width: 80px">
          Right
          <span class="resize-handler"></span>
        </div>
      </div>
    </div>

  </div>
</div>
