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
        <div class="title">Data Table</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block-title">Plain table</div>
      <div class="data-table">
        <table>
          <thead>
            <tr>
              <th class="label-cell">Dessert (100g serving)</th>
              <th class="numeric-cell">Calories</th>
              <th class="numeric-cell">Fat (g)</th>
              <th class="numeric-cell">Carbs</th>
              <th class="numeric-cell">Protein (g)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="label-cell">Frozen yogurt</td>
              <td class="numeric-cell">159</td>
              <td class="numeric-cell">6.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">4.0</td>
            </tr>
            <tr>
              <td class="label-cell">Ice cream sandwich</td>
              <td class="numeric-cell">237</td>
              <td class="numeric-cell">9.0</td>
              <td class="numeric-cell">37</td>
              <td class="numeric-cell">4.4</td>
            </tr>
            <tr>
              <td class="label-cell">Eclair</td>
              <td class="numeric-cell">262</td>
              <td class="numeric-cell">16.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">6.0</td>
            </tr>
            <tr>
              <td class="label-cell">Cupcake</td>
              <td class="numeric-cell">305</td>
              <td class="numeric-cell">3.7</td>
              <td class="numeric-cell">67</td>
              <td class="numeric-cell">4.3</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="block-title">Within card</div>
      <div class="card data-table">
        <table>
          <thead>
            <tr>
              <th class="label-cell">Dessert (100g serving)</th>
              <th class="numeric-cell">Calories</th>
              <th class="numeric-cell">Fat (g)</th>
              <th class="numeric-cell">Carbs</th>
              <th class="numeric-cell">Protein (g)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="label-cell">Frozen yogurt</td>
              <td class="numeric-cell">159</td>
              <td class="numeric-cell">6.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">4.0</td>
            </tr>
            <tr>
              <td class="label-cell">Ice cream sandwich</td>
              <td class="numeric-cell">237</td>
              <td class="numeric-cell">9.0</td>
              <td class="numeric-cell">37</td>
              <td class="numeric-cell">4.4</td>
            </tr>
            <tr>
              <td class="label-cell">Eclair</td>
              <td class="numeric-cell">262</td>
              <td class="numeric-cell">16.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">6.0</td>
            </tr>
            <tr>
              <td class="label-cell">Cupcake</td>
              <td class="numeric-cell">305</td>
              <td class="numeric-cell">3.7</td>
              <td class="numeric-cell">67</td>
              <td class="numeric-cell">4.3</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="block-title">With Footer Pagination</div>
      <div class="card data-table">
        <table>
          <thead>
            <tr>
              <th class="label-cell">Dessert (100g serving)</th>
              <th class="numeric-cell">Calories</th>
              <th class="numeric-cell">Fat (g)</th>
              <th class="numeric-cell">Carbs</th>
              <th class="numeric-cell">Protein (g)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="label-cell">Frozen yogurt</td>
              <td class="numeric-cell">159</td>
              <td class="numeric-cell">6.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">4.0</td>
            </tr>
            <tr>
              <td class="label-cell">Ice cream sandwich</td>
              <td class="numeric-cell">237</td>
              <td class="numeric-cell">9.0</td>
              <td class="numeric-cell">37</td>
              <td class="numeric-cell">4.4</td>
            </tr>
            <tr>
              <td class="label-cell">Eclair</td>
              <td class="numeric-cell">262</td>
              <td class="numeric-cell">16.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">6.0</td>
            </tr>
            <tr>
              <td class="label-cell">Cupcake</td>
              <td class="numeric-cell">305</td>
              <td class="numeric-cell">3.7</td>
              <td class="numeric-cell">67</td>
              <td class="numeric-cell">4.3</td>
            </tr>
          </tbody>
        </table>
        <div class="data-table-footer">
          <div class="data-table-rows-select">
            Rows per page:
            <div class="input input-dropdown">
              <select>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="all">All</option>
              </select>
            </div>
          </div>
          <div class="data-table-pagination">
            <span class="data-table-pagination-label">1-5 of 10</span>
            <a href="#" class="link disabled">
              <i class="icon icon-prev color-gray"></i>
            </a>
            <a href="#" class="link">
              <i class="icon icon-next color-gray"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="block-title">Selectable rows</div>
      <div class="data-table data-table-init card">
        <table>
          <thead>
            <tr>
              <th class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </th>
              <th class="label-cell">Dessert (100g serving)</th>
              <th class="numeric-cell">Calories</th>
              <th class="numeric-cell">Fat (g)</th>
              <th class="numeric-cell">Carbs</th>
              <th class="numeric-cell">Protein (g)</th>
              <th class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
                <span>In Stock</span>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Frozen yogurt</td>
              <td class="numeric-cell">159</td>
              <td class="numeric-cell">6.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">4.0</td>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
            </tr>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Ice cream sandwich</td>
              <td class="numeric-cell">237</td>
              <td class="numeric-cell">9.0</td>
              <td class="numeric-cell">37</td>
              <td class="numeric-cell">4.4</td>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
            </tr>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Eclair</td>
              <td class="numeric-cell">262</td>
              <td class="numeric-cell">16.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">6.0</td>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
            </tr>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Cupcake</td>
              <td class="numeric-cell">305</td>
              <td class="numeric-cell">3.7</td>
              <td class="numeric-cell">67</td>
              <td class="numeric-cell">4.3</td>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="block-title">Tablet-only columns</div>
      <div class="block-header">
        <p>"Comments" column will be visible only on devices with screen width >= 768px (tablets)</p>
      </div>
      <div class="data-table data-table-init card">
        <table>
          <thead>
            <tr>
              <th class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </th>
              <th class="label-cell">Dessert (100g serving)</th>
              <th class="numeric-cell">Calories</th>
              <th class="numeric-cell">Fat (g)</th>
              <th class="numeric-cell">Carbs</th>
              <th class="numeric-cell">Protein (g)</th>
              <th class="medium-only">${commentsIcon} Comments</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Frozen yogurt</td>
              <td class="numeric-cell">159</td>
              <td class="numeric-cell">6.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">4.0</td>
              <td class="medium-only">I like frozen yogurt</td>
            </tr>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Ice cream sandwich</td>
              <td class="numeric-cell">237</td>
              <td class="numeric-cell">9.0</td>
              <td class="numeric-cell">37</td>
              <td class="numeric-cell">4.4</td>
              <td class="medium-only">But like ice cream more</td>
            </tr>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Eclair</td>
              <td class="numeric-cell">262</td>
              <td class="numeric-cell">16.0</td>
              <td class="numeric-cell">24</td>
              <td class="numeric-cell">6.0</td>
              <td class="medium-only">Super tasty</td>
            </tr>
            <tr>
              <td class="checkbox-cell">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
              </td>
              <td class="label-cell">Cupcake</td>
              <td class="numeric-cell">305</td>
              <td class="numeric-cell">3.7</td>
              <td class="numeric-cell">67</td>
              <td class="numeric-cell">4.3</td>
              <td class="medium-only">Don't like it</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="block-title">With inputs</div>
      <div class="block-header">Such tables are widely used in admin interfaces for filtering or search data</div>
      <div class="card data-table">
        <table>
          <thead>
            <tr>
              <th class="input-cell">
                <span class="table-head-label">ID</span>
                <div class="input" style="width: 50px">
                  <input type="number" placeholder="Filter" />
                </div>
              </th>
              <th class="input-cell">
                <span class="table-head-label">Name</span>
                <div class="input">
                  <input type="text" placeholder="Filter" />
                </div>
              </th>
              <th class="input-cell">
                <span class="table-head-label">Email</span>
                <div class="input">
                  <input type="email" placeholder="Filter" />
                </div>
              </th>
              <th class="input-cell">
                <span class="table-head-label">Gender</span>
                <div class="input input-dropdown">
                  <select>
                    <option value="All">All</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>john@doe.com</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Doe</td>
              <td>jane@doe.com</td>
              <td>Female</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Vladimir Kharlampidi</td>
              <td>vladimir@google.com</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Jennifer Doe</td>
              <td>jennifer@doe.com</td>
              <td>Female</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="block-title">Within card with title and actions</div>
      <div class="data-table data-table-init card">
        <div class="card-header">
          <div class="data-table-title">Nutrition</div>
          <div class="data-table-actions"><a class="link icon-only">${sortIcon}</a><a
              class="link icon-only">${moreIcon}</a></div>
        </div>
        <div class="card-content">
          <table>
            <thead>
              <tr>
                <th class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </th>
                <th class="label-cell">Dessert (100g serving)</th>
                <th class="numeric-cell">Calories</th>
                <th class="numeric-cell">Fat (g)</th>
                <th class="numeric-cell">Carbs</th>
                <th class="numeric-cell">Protein (g)</th>
                <th class="medium-only">${commentsIcon} Comments</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Frozen yogurt</td>
                <td class="numeric-cell">159</td>
                <td class="numeric-cell">6.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">4.0</td>
                <td class="medium-only">I like frozen yogurt</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Ice cream sandwich</td>
                <td class="numeric-cell">237</td>
                <td class="numeric-cell">9.0</td>
                <td class="numeric-cell">37</td>
                <td class="numeric-cell">4.4</td>
                <td class="medium-only">But like ice cream more</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Eclair</td>
                <td class="numeric-cell">262</td>
                <td class="numeric-cell">16.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">6.0</td>
                <td class="medium-only">Super tasty</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Cupcake</td>
                <td class="numeric-cell">305</td>
                <td class="numeric-cell">3.7</td>
                <td class="numeric-cell">67</td>
                <td class="numeric-cell">4.3</td>
                <td class="medium-only">Don't like it</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="block-title">Sortable columns</div>
      <div class="data-table data-table-init card">
        <div class="card-header">
          <div class="data-table-title">Nutrition</div>
          <div class="data-table-actions"><a class="link icon-only">${sortIcon}</a><a
              class="link icon-only">${moreIcon}</a></div>
        </div>
        <div class="card-content">
          <table>
            <thead>
              <tr>
                <th class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </th>
                <th class="label-cell sortable-cell sortable-cell-active">Dessert (100g serving)</th>
                <th class="numeric-cell sortable-cell">Calories</th>
                <th class="numeric-cell sortable-cell">Fat (g)</th>
                <th class="numeric-cell sortable-cell">Carbs</th>
                <th class="numeric-cell sortable-cell">Protein (g)</th>
                <th class="medium-only">${commentsIcon} Comments</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Frozen yogurt</td>
                <td class="numeric-cell">159</td>
                <td class="numeric-cell">6.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">4.0</td>
                <td class="medium-only">I like frozen yogurt</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Ice cream sandwich</td>
                <td class="numeric-cell">237</td>
                <td class="numeric-cell">9.0</td>
                <td class="numeric-cell">37</td>
                <td class="numeric-cell">4.4</td>
                <td class="medium-only">But like ice cream more</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Eclair</td>
                <td class="numeric-cell">262</td>
                <td class="numeric-cell">16.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">6.0</td>
                <td class="medium-only">Super tasty</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Cupcake</td>
                <td class="numeric-cell">305</td>
                <td class="numeric-cell">3.7</td>
                <td class="numeric-cell">67</td>
                <td class="numeric-cell">4.3</td>
                <td class="medium-only">Don't like it</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="block-title">With title and different actions on select</div>
      <div class="data-table data-table-init card">
        <div class="card-header">
          <div class="data-table-header">
            <div class="data-table-title">Nutrition</div>
            <div class="data-table-actions"><a class="link icon-only">${sortIcon}</a><a
                class="link icon-only">${moreIcon}</a></div>
          </div>
          <div class="data-table-header-selected">
            <div class="data-table-title-selected"><span class="data-table-selected-count"></span> items selected</div>
            <div class="data-table-actions"><a class="link icon-only">${trashIcon}</a><a
                class="link icon-only">${moreIcon}</a></div>
          </div>
        </div>
        <div class="card-content">
          <table>
            <thead>
              <tr>
                <th class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </th>
                <th class="label-cell">Dessert (100g serving)</th>
                <th class="numeric-cell">Calories</th>
                <th class="numeric-cell">Fat (g)</th>
                <th class="numeric-cell">Carbs</th>
                <th class="numeric-cell">Protein (g)</th>
                <th class="medium-only">${commentsIcon} Comments</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Frozen yogurt</td>
                <td class="numeric-cell">159</td>
                <td class="numeric-cell">6.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">4.0</td>
                <td class="medium-only">I like frozen yogurt</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Ice cream sandwich</td>
                <td class="numeric-cell">237</td>
                <td class="numeric-cell">9.0</td>
                <td class="numeric-cell">37</td>
                <td class="numeric-cell">4.4</td>
                <td class="medium-only">But like ice cream more</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Eclair</td>
                <td class="numeric-cell">262</td>
                <td class="numeric-cell">16.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">6.0</td>
                <td class="medium-only">Super tasty</td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Cupcake</td>
                <td class="numeric-cell">305</td>
                <td class="numeric-cell">3.7</td>
                <td class="numeric-cell">67</td>
                <td class="numeric-cell">4.3</td>
                <td class="medium-only">Don't like it</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="block-title">Alternate header with actions</div>
      <div class="data-table data-table-init card">
        <div class="card-header">
          <div class="data-table-links"><a class="button">Add</a><a class="button">Remove</a></div>
          <div class="data-table-actions"><a class="link icon-only">${sortIcon}</a><a
              class="link icon-only">${moreIcon}</a></div>
        </div>
        <div class="card-content">
          <table>
            <thead>
              <tr>
                <th class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </th>
                <th class="label-cell">Dessert (100g serving)</th>
                <th class="numeric-cell">Calories</th>
                <th class="numeric-cell">Fat (g)</th>
                <th class="numeric-cell">Carbs</th>
                <th class="numeric-cell">Protein (g)</th>
                <th class="medium-only">${commentsIcon} Comments</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Frozen yogurt</td>
                <td class="numeric-cell">159</td>
                <td class="numeric-cell">6.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">4.0</td>
                <td class="medium-only">I like frozen yogurt</td>
                <td class="actions-cell"><a class="link icon-only">${composeIcon}</a><a
                    class="link icon-only">${trashIcon}</a></td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Ice cream sandwich</td>
                <td class="numeric-cell">237</td>
                <td class="numeric-cell">9.0</td>
                <td class="numeric-cell">37</td>
                <td class="numeric-cell">4.4</td>
                <td class="medium-only">But like ice cream more</td>
                <td class="actions-cell"><a class="link icon-only">${composeIcon}</a><a
                    class="link icon-only">${trashIcon}</a></td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Eclair</td>
                <td class="numeric-cell">262</td>
                <td class="numeric-cell">16.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">6.0</td>
                <td class="medium-only">Super tasty</td>
                <td class="actions-cell"><a class="link icon-only">${composeIcon}</a><a
                    class="link icon-only">${trashIcon}</a></td>
              </tr>
              <tr>
                <td class="checkbox-cell">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <i class="icon-checkbox"></i>
                  </label>
                </td>
                <td class="label-cell">Cupcake</td>
                <td class="numeric-cell">305</td>
                <td class="numeric-cell">3.7</td>
                <td class="numeric-cell">67</td>
                <td class="numeric-cell">4.3</td>
                <td class="medium-only">Don't like it</td>
                <td class="actions-cell"><a class="link icon-only">${composeIcon}</a><a
                    class="link icon-only">${trashIcon}</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="block-title">Collapsible</div>
      <div class="block-header">
        <p>The following table will be collapsed to kind of List View on small screens:</p>
      </div>
      <div class="card data-table data-table-collapsible data-table-init">
        <div class="card-header">
          <div class="data-table-title">Nutrition</div>
          <div class="data-table-actions"><a class="link icon-only">${sortIcon}</a><a
              class="link icon-only">${moreIcon}</a></div>
        </div>
        <div class="card-content">
          <table>
            <thead>
              <tr>
                <th class="label-cell">Dessert (100g serving)</th>
                <th class="numeric-cell">Calories</th>
                <th class="numeric-cell">Fat (g)</th>
                <th class="numeric-cell">Carbs</th>
                <th class="numeric-cell">Protein (g)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="label-cell">Frozen yogurt</td>
                <td class="numeric-cell">159</td>
                <td class="numeric-cell">6.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">4.0</td>
              </tr>
              <tr>
                <td class="label-cell">Ice cream sandwich</td>
                <td class="numeric-cell">237</td>
                <td class="numeric-cell">9.0</td>
                <td class="numeric-cell">37</td>
                <td class="numeric-cell">4.4</td>
              </tr>
              <tr>
                <td class="label-cell">Eclair</td>
                <td class="numeric-cell">262</td>
                <td class="numeric-cell">16.0</td>
                <td class="numeric-cell">24</td>
                <td class="numeric-cell">6.0</td>
              </tr>
              <tr>
                <td class="label-cell">Cupcake</td>
                <td class="numeric-cell">305</td>
                <td class="numeric-cell">3.7</td>
                <td class="numeric-cell">67</td>
                <td class="numeric-cell">4.3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $h, $theme }) => {
    const md = $theme.md;
    const commentsIcon = !md ? $h`<i class="icon f7-icons">chat_bubble_text_fill</i>` : $h`<i class="icon material-icons">message</i>`;
    const sortIcon = !md ? $h`<i class="icon f7-icons">line_horizontal_3_decrease</i>` : $h`<i class="icon material-icons">sort</i>`;
    const moreIcon = !md ? $h`<i class="icon f7-icons">ellipsis_vertical_circle</i>` : $h`<i class="icon material-icons">more_vert</i>`;
    const trashIcon = !md ? $h`<i class="icon f7-icons">trash</i>` : $h`<i class="icon material-icons">delete</i>`;
    const composeIcon = !md ? $h`<i class="icon f7-icons">square_pencil</i>` : $h`<i class="icon material-icons">edit</i>`;
    return $render;
  }
</script>
