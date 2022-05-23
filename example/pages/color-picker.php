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
        <div class="title">Color Picker</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Framework7 comes with ultimate modular Color Picker component that allows to create color picker with
          limitless combinations of color modules.</p>
      </div>

      <div class="block-title">Color Wheel</div>
      <div class="block-header">Minimal example with color wheel in Popover</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-wheel-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-wheel" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">Saturation-Brightness Spectrum</div>
      <div class="block-header">SB Spectrum + Hue Slider in Popover</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-spectrum-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-spectrum" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">Hue-Saturation Spectrum</div>
      <div class="block-header">HS Spectrum + Brightness Slider in Popover</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-hs-spectrum-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-hs-spectrum" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">RGB Sliders</div>
      <div class="block-header">RGB sliders with labels and values in Popover</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-rgb-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-rgb" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">RGBA Sliders</div>
      <div class="block-header">RGB sliders + Alpha Slider with labels and values in Popover</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-rgba-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-rgba" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">HSB Sliders</div>
      <div class="block-header">HSB sliders with labels and values in Popover</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-hsb-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-hsb" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">RGB Bars</div>
      <div class="block-header">RGB bars with labels and values in Popover on tablet and in Popup on phone</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-rgb-bars-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-rgb-bars" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">RGB Sliders + Colors</div>
      <div class="block-header">RGB sliders with labels and values in Popover, and previous and current color values
        blocks</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-rgb-initial-current-colors-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly"
                    id="demo-color-picker-rgb-initial-current-colors" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">Palette</div>
      <div class="block-header">Palette opened in Sheet modal on phone and Popover on larger screens</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-palette-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-palette" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">Pro Mode</div>
      <div class="block-header">Current Color + HSB Sliders + RGB sliders + Alpha Slider + HEX + Palette with labels and
        editable values</div>
      <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-media">
                <i class="icon demo-list-icon" id="demo-color-picker-pro-value"></i>
              </div>
              <div class="item-inner">
                <div class="item-input-wrap">
                  <input type="text" placeholder="Color" readonly="readonly" id="demo-color-picker-pro" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="block-title">Inline Color Picker</div>
      <div class="block-header">SB Spectrum + HSB Sliders</div>
      <div class="block block-strong no-padding">
        ${colorPickerInlineValue && $h`
        <div class="padding">
          HEX: ${colorPickerInlineValue.hex}<br />
          Alpha: ${colorPickerInlineValue.alpha}<br />
          Hue: ${colorPickerInlineValue.hue}<br />
          RGB: ${colorPickerInlineValue.rgb.join(', ')}<br />
          HSL: ${colorPickerInlineValue.hsl.join(', ')}<br />
          HSB: ${colorPickerInlineValue.hsb.join(', ')}<br />
          RGBA: ${colorPickerInlineValue.rgba.join(', ')}<br />
          HSLA: ${colorPickerInlineValue.hsla.join(', ')}
        </div>
        `}

        <div id="demo-color-picker-inline"></div>
      </div>

    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $on, $update }) => {
    let colorPickerInlineValue = null;

    let colorPickerWheel;
    let colorPickerSpectrum;
    let colorPickerHsSpectrum;
    let colorPickerRgb;
    let colorPickerRgba;
    let colorPickerHsb;
    let colorPickerRgbBars;
    let colorPickerRgbPrevCurrentColors;
    let colorPickerPalette;
    let colorPickerRgbPro;
    let colorPickerInline;

    $on('pageInit', () => {
      // Default
      colorPickerWheel = app.colorPicker.create({
        inputEl: '#demo-color-picker-wheel',
        targetEl: '#demo-color-picker-wheel-value',
        targetElSetBackgroundColor: true,
        modules: ['wheel'],
        openIn: 'popover',
        value: {
          hex: '#00ff00',
        },
      });
      colorPickerSpectrum = app.colorPicker.create({
        inputEl: '#demo-color-picker-spectrum',
        targetEl: '#demo-color-picker-spectrum-value',
        targetElSetBackgroundColor: true,
        modules: ['sb-spectrum', 'hue-slider'],
        openIn: 'popover',
        value: {
          hex: '#ff0000',
        },
      });
      colorPickerHsSpectrum = app.colorPicker.create({
        inputEl: '#demo-color-picker-hs-spectrum',
        targetEl: '#demo-color-picker-hs-spectrum-value',
        targetElSetBackgroundColor: true,
        modules: ['hs-spectrum', 'brightness-slider'],
        openIn: 'popover',
        value: {
          hex: '#ff0000',
        },
      });
      colorPickerRgb = app.colorPicker.create({
        inputEl: '#demo-color-picker-rgb',
        targetEl: '#demo-color-picker-rgb-value',
        targetElSetBackgroundColor: true,
        modules: ['rgb-sliders'],
        openIn: 'popover',
        sliderValue: true,
        sliderLabel: true,
        value: {
          hex: '#0000ff',
        },
      });
      colorPickerRgba = app.colorPicker.create({
        inputEl: '#demo-color-picker-rgba',
        targetEl: '#demo-color-picker-rgba-value',
        targetElSetBackgroundColor: true,
        modules: ['rgb-sliders', 'alpha-slider'],
        openIn: 'popover',
        sliderValue: true,
        sliderLabel: true,
        value: {
          hex: '#ff00ff',
        },
        formatValue: function (value) {
          return 'rgba(' + value.rgba.join(', ') + ')';
        },
      });
      colorPickerHsb = app.colorPicker.create({
        inputEl: '#demo-color-picker-hsb',
        targetEl: '#demo-color-picker-hsb-value',
        targetElSetBackgroundColor: true,
        modules: ['hsb-sliders'],
        openIn: 'popover',
        sliderValue: true,
        sliderLabel: true,
        formatValue: function (value) {
          return 'hsb(' + value.hsb[0] + (', ' + value.hsb[1] * 1000 / 10 + '%') + (', ' + value.hsb[2] * 1000 / 10 + '%') + ')';
        },
        value: {
          hex: '#00ff00',
        },
      });
      colorPickerRgbBars = app.colorPicker.create({
        inputEl: '#demo-color-picker-rgb-bars',
        targetEl: '#demo-color-picker-rgb-bars-value',
        targetElSetBackgroundColor: true,
        modules: ['rgb-bars'],
        openIn: 'auto',
        barValue: true,
        barLabel: true,
        formatValue: function (value) {
          return 'rgb(' + value.rgb.join(', ') + ')';
        },
        value: {
          hex: '#0000ff',
        },
      });
      colorPickerRgbPrevCurrentColors = app.colorPicker.create({
        inputEl: '#demo-color-picker-rgb-initial-current-colors',
        targetEl: '#demo-color-picker-rgb-initial-current-colors-value',
        targetElSetBackgroundColor: true,
        modules: ['initial-current-colors', 'rgb-sliders'],
        openIn: 'popover',
        sliderValue: true,
        sliderLabel: true,
        formatValue: function (value) {
          return 'rgb(' + value.rgb.join(', ') + ')';
        },
        value: {
          hex: '#ffff00',
        },
      });
      colorPickerPalette = app.colorPicker.create({
        inputEl: '#demo-color-picker-palette',
        targetEl: '#demo-color-picker-palette-value',
        targetElSetBackgroundColor: true,
        modules: ['palette'],
        openIn: 'auto',
        openInPhone: 'sheet',
        palette: [
          ['#FFEBEE', '#FFCDD2', '#EF9A9A', '#E57373', '#EF5350', '#F44336', '#E53935', '#D32F2F', '#C62828', '#B71C1C'],
          ['#F3E5F5', '#E1BEE7', '#CE93D8', '#BA68C8', '#AB47BC', '#9C27B0', '#8E24AA', '#7B1FA2', '#6A1B9A', '#4A148C'],
          ['#E8EAF6', '#C5CAE9', '#9FA8DA', '#7986CB', '#5C6BC0', '#3F51B5', '#3949AB', '#303F9F', '#283593', '#1A237E'],
          ['#E1F5FE', '#B3E5FC', '#81D4FA', '#4FC3F7', '#29B6F6', '#03A9F4', '#039BE5', '#0288D1', '#0277BD', '#01579B'],
          ['#E0F2F1', '#B2DFDB', '#80CBC4', '#4DB6AC', '#26A69A', '#009688', '#00897B', '#00796B', '#00695C', '#004D40'],
          ['#F1F8E9', '#DCEDC8', '#C5E1A5', '#AED581', '#9CCC65', '#8BC34A', '#7CB342', '#689F38', '#558B2F', '#33691E'],
          ['#FFFDE7', '#FFF9C4', '#FFF59D', '#FFF176', '#FFEE58', '#FFEB3B', '#FDD835', '#FBC02D', '#F9A825', '#F57F17'],
          ['#FFF3E0', '#FFE0B2', '#FFCC80', '#FFB74D', '#FFA726', '#FF9800', '#FB8C00', '#F57C00', '#EF6C00', '#E65100'],
        ],
        value: {
          hex: '#FFEBEE',
        },
        formatValue: function (value) {
          return value.hex;
        },
      });

      colorPickerRgbPro = app.colorPicker.create({
        inputEl: '#demo-color-picker-pro',
        targetEl: '#demo-color-picker-pro-value',
        targetElSetBackgroundColor: true,
        modules: ['initial-current-colors', 'sb-spectrum', 'hsb-sliders', 'rgb-sliders', 'alpha-slider', 'hex', 'palette'],
        openIn: 'auto',
        sliderValue: true,
        sliderValueEditable: true,
        sliderLabel: true,
        hexLabel: true,
        hexValueEditable: true,
        groupedModules: true,
        palette: [
          ['#FFEBEE', '#FFCDD2', '#EF9A9A', '#E57373', '#EF5350', '#F44336', '#E53935', '#D32F2F', '#C62828', '#B71C1C'],
          ['#F3E5F5', '#E1BEE7', '#CE93D8', '#BA68C8', '#AB47BC', '#9C27B0', '#8E24AA', '#7B1FA2', '#6A1B9A', '#4A148C'],
          ['#E8EAF6', '#C5CAE9', '#9FA8DA', '#7986CB', '#5C6BC0', '#3F51B5', '#3949AB', '#303F9F', '#283593', '#1A237E'],
          ['#E1F5FE', '#B3E5FC', '#81D4FA', '#4FC3F7', '#29B6F6', '#03A9F4', '#039BE5', '#0288D1', '#0277BD', '#01579B'],
          ['#E0F2F1', '#B2DFDB', '#80CBC4', '#4DB6AC', '#26A69A', '#009688', '#00897B', '#00796B', '#00695C', '#004D40'],
          ['#F1F8E9', '#DCEDC8', '#C5E1A5', '#AED581', '#9CCC65', '#8BC34A', '#7CB342', '#689F38', '#558B2F', '#33691E'],
          ['#FFFDE7', '#FFF9C4', '#FFF59D', '#FFF176', '#FFEE58', '#FFEB3B', '#FDD835', '#FBC02D', '#F9A825', '#F57F17'],
          ['#FFF3E0', '#FFE0B2', '#FFCC80', '#FFB74D', '#FFA726', '#FF9800', '#FB8C00', '#F57C00', '#EF6C00', '#E65100'],
        ],
        formatValue: function (value) {
          return 'rgba(' + value.rgba.join(', ') + ')';
        },
        value: {
          hex: '#00ffff',
        },
      });

      colorPickerInline = app.colorPicker.create({
        containerEl: '#demo-color-picker-inline',
        modules: ['sb-spectrum', 'hsb-sliders', 'alpha-slider'],
        on: {
          change(cp, value) {
            colorPickerInlineValue = value;
            $update();
          },
        },
        value: {
          hex: '#77ff66',
        },
      });
    });
    $on('pageBeforeRemove', () => {
      colorPickerWheel.destroy();
      colorPickerSpectrum.destroy();
      colorPickerHsSpectrum.destroy();
      colorPickerRgb.destroy();
      colorPickerRgba.destroy();
      colorPickerHsb.destroy();
      colorPickerRgbBars.destroy();
      colorPickerRgbPrevCurrentColors.destroy();
      colorPickerPalette.destroy();
      colorPickerRgbPro.destroy();
      colorPickerInline.destroy();
    });

    return $render;
  };

</script>
